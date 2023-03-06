<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carArray = [['Toyota', 'Corolla', 'Camry', 'Yaris', 'Prius'], ['Honda', 'Civic', 'Accord', 'CR-V', 'Odyssey'], ['Ford', 'Focus', 'Fusion', 'Fiesta', 'Escape'], ['Nissan', 'Altima', 'Maxima', 'Sentra', 'Rogue'], ['BMW', '3 Series', '5 Series', 'X5', '7 Series'], ['Mercedes-Benz', 'C-Class', 'E-Class', 'S-Class', 'SL-Class'], ['Audi', 'A4', 'A6', 'A8', 'TT'], ['Volkswagen', 'Golf', 'Passat', 'Jetta', 'Tiguan'], ['Tesla', 'Model S', 'Model X', 'Model 3', 'Roadster'], ['Chevrolet', 'Malibu', 'Impala', 'Silverado', 'Equinox'], ['Ferrari', 'F430', '458 Italia', 'California', '599 GTB Fiorano'], ['Porsche', '911', 'Cayenne', 'Boxster', 'Panamera'], ['Lamborghini', 'Gallardo', 'Murciélago', 'Aventador', 'Huracán'], ['Maserati', 'Quattroporte', 'GranTurismo', 'Ghibli', 'Spyder'], ['Alfa Romeo', '156', '147', 'GTV', 'Spider'], ['Jeep', 'Wrangler', 'Grand Cherokee', 'Cherokee', 'Liberty'], ['Chrysler', '300C', 'Sebring', 'PT Cruiser', 'Town & Country'], ['Dodge', 'Charger', 'Challenger', 'Durango', 'Caliber'], ['Kia', 'Optima', 'Rio', 'Soul', 'Sedona'], ['Hyundai', 'Sonata', 'Elantra', 'Tucson', 'Santa Fe'], ['Mazda', 'Mazda3', 'Mazda6', 'MX-5 Miata', 'CX-5'], ['Subaru', 'Legacy', 'Impreza', 'Forester', 'Outback'], ['Volvo', 'S60', 'XC90', 'V70', 'C30'], ['Renault', 'Clio', 'Megane', 'Laguna', 'Scenic'], ['Peugeot', '207', '308', '407', '508'], ['Citroën', 'C3', 'C4', 'C5', 'DS3'], ['Fiat', 'Punto', 'Panda', '500', 'Bravo'], ['Opel', 'Astra', 'Corsa', 'Insignia', 'Vectra', 'Zafira'], ['Škoda', 'Octavia', 'Superb', 'Fabia', 'Yeti', 'Rapid'], ['Seat', 'Leon', 'Ibiza', 'Altea', 'Toledo', 'Arosa'], ['Suzuki', 'Swift', 'Jimny', 'Vitara', 'Grand Vitara', 'SX4'], ['Mitsubishi', 'Lancer', 'Outlander', 'Pajero', 'Eclipse', 'Galant']];
        $brand=rand(0,(sizeof($carArray)-1));
        $model=rand(1,(sizeof($carArray[$brand])-1));

        return [
//            'reg_number'=>strtoupper($this->faker->randomLetter().$this->faker->randomLetter().$this->faker->randomLetter()).rand(100,999),
            'reg_number'=>strtoupper(fake()->bothify('???###')),
            'brand'=>$carArray[$brand][0],
            'model' =>$carArray[$brand][$model],
            'owner_id'=>rand(1,2)
        ];
    }
}
