<?php

require_once '../bootstrap/app.php';

use App\Core\DB;

/**
 * @property \CarFuel[] $fuel
 */
class Car
{
    public int $id;
    public string $carNumber;
    public string $type;

    public static $wheels = 4;

    public static function get(int $id): self
    {
        $connection = DB::getInstance();
        $pdo = $connection->getPDO();

        $stmt = $pdo->prepare('SELECT * FROM car WHERE id = :id');

        $stmt->execute([
            'id' => $id
        ]);

        $result = $stmt->fetchObject();

        $car = new self();

        $car->id = $result->id;
        $car->carNumber = $result->car_number;
        $car->type = $result->type;

        return $car;
    }

    public function __get(string $name)
    {
        switch ($name) {
            case 'fuel':
                return CarFuel::getArray($this->id);
            case 'fuel_history':
                return 'mm';
        }
    }
}

class CarFuel
{
    private int $carId;

    public int $id;
    public int $value;
    public string $type;

    public function __construct(int $carId, int $id, int $value, string $type)
    {
        $this->carId = $carId;
        $this->id = $id;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * @return self[]
     */
    public static function getArray(int $id): array
    {
        $connection = DB::getInstance();
        $pdo = $connection->getPDO();

        $stmt = $pdo->prepare(<<<SQL
            SELECT cf.`tank_id`, cf.`capacity`, ft.`name` AS type FROM `car_fuel` cf
            JOIN `fuel_types` ft ON cf.type = ft.id 
            WHERE car_id = :id
        SQL);

        $stmt->execute([
            'id' => $id
        ]);

        $res = [];
        while($row = $stmt->fetchObject()) {
            $res[$row->tank_id] = new self($id, $row->tank_id, $row->capacity, $row->type);
        }

        return $res;
    }

    public function history()
    {
        $connection = DB::getInstance();
        $pdo = $connection->getPDO();

        $stmt = $pdo->prepare(<<<SQL
            SELECT * FROM car_fuel_history 
            WHERE car_id = :carId
            AND tank_id = :tankId
        SQL);

        $stmt->execute([
            'carId' => $this->carId,
            'tankId' => $this->id
        ]);

        $res = [];
        while ($row = $stmt->fetchObject()) {
            $res[$row->gmt] = (float) ($this->value * $row->value / 100);
        }

        return $res;
    }
}

$car = Car::get($_GET['car_id'] ?? 1);
var_dump($car);
die();

$tank = $car->fuel[$_GET['tank_id'] ?? 1];

?>

<table>
    <thead>
        <td>Car</td>
        <td>Tank</td>
        <td>Type</td>
        <td>Time</td>
        <td>Value</td>
    </thead>
    <tbody>
        <?php
            foreach($car->fuel[1]->history() as $gmt => $value) {
                ?>
                    <tr>
                        <td><?= $car->carNumber ?></td>
                        <td><?= $tank->id ?></td>
                        <td><?= $tank->type ?></td>
                        <td><?= $gmt ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>

