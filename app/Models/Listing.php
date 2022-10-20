<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title'=> 'Frontend Developer',
                    'description' => 'Carry out all the responsibilities of a frontend developer'
                ],
                [
                    'id' => 2,
                    'title'=> 'Backend Developer',
                    'description' => 'Carry out all the responsibilities of a backend developer'
                ]
                ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }

?>