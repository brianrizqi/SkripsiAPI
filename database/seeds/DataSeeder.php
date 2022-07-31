<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Data::create( [
            'id'=>78,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'22',
            'max_value'=>'25',
            'parameter'=>1,
            'created_at'=>'2019-11-16 05:54:28',
            'updated_at'=>'2019-11-16 05:54:28'
        ] );

        \App\Data::create( [
            'id'=>79,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'25',
            'max_value'=>'27',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:20:49',
            'updated_at'=>'2019-11-19 00:20:49'
        ] );

        \App\Data::create( [
            'id'=>80,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>'22',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:20:54',
            'updated_at'=>'2019-11-19 00:20:54'
        ] );

        \App\Data::create( [
            'id'=>81,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'27',
            'max_value'=>'29',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:21:00',
            'updated_at'=>'2019-11-19 00:21:00'
        ] );

        \App\Data::create( [
            'id'=>82,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>'20',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:21:07',
            'updated_at'=>'2019-11-19 00:21:07'
        ] );

        \App\Data::create( [
            'id'=>83,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:21:12',
            'updated_at'=>'2019-11-19 00:21:12'
        ] );

        \App\Data::create( [
            'id'=>84,
            'plant_id'=>1,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'29',
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:21:20',
            'updated_at'=>'2019-11-19 00:21:20'
        ] );

        \App\Data::create( [
            'id'=>85,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'1500',
            'max_value'=>'2000',
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:21:48',
            'updated_at'=>'2019-11-19 00:21:48'
        ] );

        \App\Data::create( [
            'id'=>86,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'1000',
            'max_value'=>'1500',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:22:11',
            'updated_at'=>'2019-11-19 00:22:11'
        ] );

        \App\Data::create( [
            'id'=>87,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'2000',
            'max_value'=>'2500',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:22:20',
            'updated_at'=>'2019-11-19 00:22:20'
        ] );

        \App\Data::create( [
            'id'=>88,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'700',
            'max_value'=>'1000',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:22:25',
            'updated_at'=>'2019-11-19 00:22:25'
        ] );

        \App\Data::create( [
            'id'=>89,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'2500',
            'max_value'=>'3000',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:22:31',
            'updated_at'=>'2019-11-19 00:22:31'
        ] );

        \App\Data::create( [
            'id'=>90,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>'700',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:22:35',
            'updated_at'=>'2019-11-19 00:22:35'
        ] );

        \App\Data::create( [
            'id'=>91,
            'plant_id'=>1,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'3000',
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:22:39',
            'updated_at'=>'2019-11-19 00:22:39'
        ] );

        \App\Data::create( [
            'id'=>92,
            'plant_id'=>1,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:23:05',
            'updated_at'=>'2019-11-19 00:23:05'
        ] );

        \App\Data::create( [
            'id'=>93,
            'plant_id'=>1,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:23:15',
            'updated_at'=>'2019-11-19 00:23:15'
        ] );

        \App\Data::create( [
            'id'=>94,
            'plant_id'=>1,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:23:22',
            'updated_at'=>'2019-11-19 00:23:22'
        ] );

        \App\Data::create( [
            'id'=>95,
            'plant_id'=>1,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:23:30',
            'updated_at'=>'2019-11-19 00:23:30'
        ] );

        \App\Data::create( [
            'id'=>96,
            'plant_id'=>1,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'50',
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:24:59',
            'updated_at'=>'2019-11-19 00:24:59'
        ] );

        \App\Data::create( [
            'id'=>97,
            'plant_id'=>1,
            'criteria_id'=>4,
            'min_value'=>'40',
            'max_value'=>'50',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:25:05',
            'updated_at'=>'2019-11-19 00:25:05'
        ] );

        \App\Data::create( [
            'id'=>98,
            'plant_id'=>1,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>'40',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:25:15',
            'updated_at'=>'2019-11-19 00:25:15'
        ] );

        \App\Data::create( [
            'id'=>99,
            'plant_id'=>1,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:25:23',
            'updated_at'=>'2019-11-19 00:25:23'
        ] );

        \App\Data::create( [
            'id'=>100,
            'plant_id'=>1,
            'criteria_id'=>5,
            'min_value'=>'5.5',
            'max_value'=>'7',
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:26:01',
            'updated_at'=>'2019-11-19 00:26:01'
        ] );

        \App\Data::create( [
            'id'=>101,
            'plant_id'=>1,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>'5.5',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:26:11',
            'updated_at'=>'2019-11-19 00:26:11'
        ] );

        \App\Data::create( [
            'id'=>102,
            'plant_id'=>1,
            'criteria_id'=>5,
            'min_value'=>'7',
            'max_value'=>'8',
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:26:24',
            'updated_at'=>'2019-11-19 00:26:24'
        ] );

        \App\Data::create( [
            'id'=>103,
            'plant_id'=>1,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:26:30',
            'updated_at'=>'2019-11-19 00:26:30'
        ] );

        \App\Data::create( [
            'id'=>104,
            'plant_id'=>1,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'8',
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:26:34',
            'updated_at'=>'2019-11-19 00:26:34'
        ] );

        \App\Data::create( [
            'id'=>105,
            'plant_id'=>1,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:26:44',
            'updated_at'=>'2019-11-19 00:26:44'
        ] );

        \App\Data::create( [
            'id'=>106,
            'plant_id'=>1,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:26:54',
            'updated_at'=>'2019-11-19 00:26:54'
        ] );

        \App\Data::create( [
            'id'=>107,
            'plant_id'=>1,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:27:15',
            'updated_at'=>'2019-11-19 00:27:15'
        ] );

        \App\Data::create( [
            'id'=>108,
            'plant_id'=>1,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-19 00:27:20',
            'updated_at'=>'2019-11-19 00:27:20'
        ] );

        \App\Data::create( [
            'id'=>113,
            'plant_id'=>1,
            'criteria_id'=>8,
            'min_value'=>'Jagung',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-19 00:28:00',
            'updated_at'=>'2019-11-19 00:28:00'
        ] );

        \App\Data::create( [
            'id'=>114,
            'plant_id'=>1,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-19 00:28:08',
            'updated_at'=>'2019-11-19 00:28:08'
        ] );

        \App\Data::create( [
            'id'=>115,
            'plant_id'=>1,
            'criteria_id'=>8,
            'min_value'=>'Padi',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-19 00:28:17',
            'updated_at'=>'2019-11-19 00:28:17'
        ] );

        \App\Data::create( [
            'id'=>116,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'21',
            'max_value'=>'26',
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:10:50',
            'updated_at'=>'2019-11-26 17:10:50'
        ] );

        \App\Data::create( [
            'id'=>117,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'26',
            'max_value'=>'29',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:11:01',
            'updated_at'=>'2019-11-26 17:11:01'
        ] );

        \App\Data::create( [
            'id'=>118,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>'21',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:11:08',
            'updated_at'=>'2019-11-26 17:11:08'
        ] );

        \App\Data::create( [
            'id'=>119,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'29',
            'max_value'=>'33',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:11:46',
            'updated_at'=>'2019-11-26 17:11:46'
        ] );

        \App\Data::create( [
            'id'=>120,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>'20',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:11:54',
            'updated_at'=>'2019-11-26 17:11:54'
        ] );

        \App\Data::create( [
            'id'=>121,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:12:01',
            'updated_at'=>'2019-11-26 17:12:01'
        ] );

        \App\Data::create( [
            'id'=>122,
            'plant_id'=>2,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'33',
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:12:13',
            'updated_at'=>'2019-11-26 17:12:13'
        ] );

        \App\Data::create( [
            'id'=>123,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'1200',
            'max_value'=>'1500',
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:13:30',
            'updated_at'=>'2019-11-26 17:13:30'
        ] );

        \App\Data::create( [
            'id'=>124,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'1000',
            'max_value'=>'1200',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:13:59',
            'updated_at'=>'2019-11-26 17:13:59'
        ] );

        \App\Data::create( [
            'id'=>125,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'1500',
            'max_value'=>'1900',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:14:09',
            'updated_at'=>'2019-11-26 17:14:09'
        ] );

        \App\Data::create( [
            'id'=>126,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'800',
            'max_value'=>'1000',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:15:11',
            'updated_at'=>'2019-11-26 17:15:11'
        ] );

        \App\Data::create( [
            'id'=>127,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'1900',
            'max_value'=>'2300',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:15:20',
            'updated_at'=>'2019-11-26 17:15:20'
        ] );

        \App\Data::create( [
            'id'=>128,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>'800',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:15:26',
            'updated_at'=>'2019-11-26 17:15:26'
        ] );

        \App\Data::create( [
            'id'=>129,
            'plant_id'=>2,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'2300',
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:15:34',
            'updated_at'=>'2019-11-26 17:15:34'
        ] );

        \App\Data::create( [
            'id'=>130,
            'plant_id'=>2,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:15:42',
            'updated_at'=>'2019-11-26 17:15:42'
        ] );

        \App\Data::create( [
            'id'=>131,
            'plant_id'=>2,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:15:52',
            'updated_at'=>'2019-11-26 17:15:52'
        ] );

        \App\Data::create( [
            'id'=>132,
            'plant_id'=>2,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:16:02',
            'updated_at'=>'2019-11-26 17:16:02'
        ] );

        \App\Data::create( [
            'id'=>133,
            'plant_id'=>2,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:16:10',
            'updated_at'=>'2019-11-26 17:16:10'
        ] );

        \App\Data::create( [
            'id'=>134,
            'plant_id'=>2,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'60',
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:16:37',
            'updated_at'=>'2019-11-26 17:16:37'
        ] );

        \App\Data::create( [
            'id'=>135,
            'plant_id'=>2,
            'criteria_id'=>4,
            'min_value'=>'40',
            'max_value'=>'60',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:16:52',
            'updated_at'=>'2019-11-26 17:16:52'
        ] );

        \App\Data::create( [
            'id'=>136,
            'plant_id'=>2,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>'40',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:16:58',
            'updated_at'=>'2019-11-26 17:16:58'
        ] );

        \App\Data::create( [
            'id'=>137,
            'plant_id'=>2,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:17:04',
            'updated_at'=>'2019-11-26 17:17:04'
        ] );

        \App\Data::create( [
            'id'=>138,
            'plant_id'=>2,
            'criteria_id'=>5,
            'min_value'=>'5.8',
            'max_value'=>'7.8',
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:18:43',
            'updated_at'=>'2019-11-26 17:18:43'
        ] );

        \App\Data::create( [
            'id'=>139,
            'plant_id'=>2,
            'criteria_id'=>5,
            'min_value'=>'5.5',
            'max_value'=>'5.8',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:19:00',
            'updated_at'=>'2019-11-26 17:19:00'
        ] );

        \App\Data::create( [
            'id'=>140,
            'plant_id'=>2,
            'criteria_id'=>5,
            'min_value'=>'7.8',
            'max_value'=>'8.2',
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:20:39',
            'updated_at'=>'2019-11-26 17:20:39'
        ] );

        \App\Data::create( [
            'id'=>141,
            'plant_id'=>2,
            'criteria_id'=>5,
            'min_value'=>'5.5',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:20:46',
            'updated_at'=>'2019-11-26 17:20:46'
        ] );

        \App\Data::create( [
            'id'=>142,
            'plant_id'=>2,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'8.2',
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:20:52',
            'updated_at'=>'2019-11-26 17:20:52'
        ] );

        \App\Data::create( [
            'id'=>143,
            'plant_id'=>2,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:21:01',
            'updated_at'=>'2019-11-26 17:21:01'
        ] );

        \App\Data::create( [
            'id'=>144,
            'plant_id'=>2,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:21:07',
            'updated_at'=>'2019-11-26 17:21:07'
        ] );

        \App\Data::create( [
            'id'=>145,
            'plant_id'=>2,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:21:15',
            'updated_at'=>'2019-11-26 17:21:15'
        ] );

        \App\Data::create( [
            'id'=>146,
            'plant_id'=>2,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-26 17:21:29',
            'updated_at'=>'2019-11-26 17:21:29'
        ] );

        \App\Data::create( [
            'id'=>151,
            'plant_id'=>2,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-26 17:28:01',
            'updated_at'=>'2019-11-26 17:28:01'
        ] );

        \App\Data::create( [
            'id'=>152,
            'plant_id'=>2,
            'criteria_id'=>8,
            'min_value'=>'Ubi Kayu',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:28:12',
            'updated_at'=>'2019-11-26 17:28:12'
        ] );

        \App\Data::create( [
            'id'=>153,
            'plant_id'=>2,
            'criteria_id'=>8,
            'min_value'=>'Ubi Jalar',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-26 17:28:20',
            'updated_at'=>'2019-11-26 17:28:20'
        ] );

        \App\Data::create( [
            'id'=>154,
            'plant_id'=>2,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-26 17:28:29',
            'updated_at'=>'2019-11-26 17:28:29'
        ] );

        \App\Data::create( [
            'id'=>155,
            'plant_id'=>3,
            'criteria_id'=>1,
            'min_value'=>'25',
            'max_value'=>'32',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:07:30',
            'updated_at'=>'2019-11-27 01:07:30'
        ] );

        \App\Data::create( [
            'id'=>156,
            'plant_id'=>3,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'32',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:07:37',
            'updated_at'=>'2019-11-27 01:07:37'
        ] );

        \App\Data::create( [
            'id'=>157,
            'plant_id'=>3,
            'criteria_id'=>1,
            'min_value'=>'22',
            'max_value'=>'25',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:07:52',
            'updated_at'=>'2019-11-27 01:07:52'
        ] );

        \App\Data::create( [
            'id'=>158,
            'plant_id'=>3,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>'22',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:07:59',
            'updated_at'=>'2019-11-27 01:07:59'
        ] );

        \App\Data::create( [
            'id'=>159,
            'plant_id'=>3,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:08:07',
            'updated_at'=>'2019-11-27 01:08:07'
        ] );

        \App\Data::create( [
            'id'=>160,
            'plant_id'=>3,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'145',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:09:23',
            'updated_at'=>'2019-11-27 01:09:23'
        ] );

        \App\Data::create( [
            'id'=>161,
            'plant_id'=>3,
            'criteria_id'=>2,
            'min_value'=>'95',
            'max_value'=>'145',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:09:30',
            'updated_at'=>'2019-11-27 01:09:30'
        ] );

        \App\Data::create( [
            'id'=>162,
            'plant_id'=>3,
            'criteria_id'=>2,
            'min_value'=>'70',
            'max_value'=>'95',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:09:56',
            'updated_at'=>'2019-11-27 01:09:56'
        ] );

        \App\Data::create( [
            'id'=>163,
            'plant_id'=>3,
            'criteria_id'=>2,
            'min_value'=>'70',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:10:15',
            'updated_at'=>'2019-11-27 01:10:15'
        ] );

        \App\Data::create( [
            'id'=>164,
            'plant_id'=>3,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:10:35',
            'updated_at'=>'2019-11-27 01:10:35'
        ] );

        \App\Data::create( [
            'id'=>165,
            'plant_id'=>3,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:11:49',
            'updated_at'=>'2019-11-27 01:11:49'
        ] );

        \App\Data::create( [
            'id'=>166,
            'plant_id'=>3,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:11:59',
            'updated_at'=>'2019-11-27 01:11:59'
        ] );

        \App\Data::create( [
            'id'=>167,
            'plant_id'=>3,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:12:05',
            'updated_at'=>'2019-11-27 01:12:05'
        ] );

        \App\Data::create( [
            'id'=>168,
            'plant_id'=>3,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'75',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:12:15',
            'updated_at'=>'2019-11-27 01:12:15'
        ] );

        \App\Data::create( [
            'id'=>169,
            'plant_id'=>3,
            'criteria_id'=>4,
            'min_value'=>'50',
            'max_value'=>'75',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:12:33',
            'updated_at'=>'2019-11-27 01:12:33'
        ] );

        \App\Data::create( [
            'id'=>170,
            'plant_id'=>3,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>'50',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:12:42',
            'updated_at'=>'2019-11-27 01:12:42'
        ] );

        \App\Data::create( [
            'id'=>171,
            'plant_id'=>3,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:12:54',
            'updated_at'=>'2019-11-27 01:12:54'
        ] );

        \App\Data::create( [
            'id'=>172,
            'plant_id'=>3,
            'criteria_id'=>5,
            'min_value'=>'5.5',
            'max_value'=>'6.5',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:17:22',
            'updated_at'=>'2019-11-27 01:17:22'
        ] );

        \App\Data::create( [
            'id'=>173,
            'plant_id'=>3,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>'5.5',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:17:31',
            'updated_at'=>'2019-11-27 01:17:31'
        ] );

        \App\Data::create( [
            'id'=>174,
            'plant_id'=>3,
            'criteria_id'=>5,
            'min_value'=>'6.5',
            'max_value'=>'7.5',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:17:41',
            'updated_at'=>'2019-11-27 01:17:41'
        ] );

        \App\Data::create( [
            'id'=>175,
            'plant_id'=>3,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:18:05',
            'updated_at'=>'2019-11-27 01:18:05'
        ] );

        \App\Data::create( [
            'id'=>176,
            'plant_id'=>3,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'7.5',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:18:11',
            'updated_at'=>'2019-11-27 01:18:11'
        ] );

        \App\Data::create( [
            'id'=>177,
            'plant_id'=>3,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:18:22',
            'updated_at'=>'2019-11-27 01:18:22'
        ] );

        \App\Data::create( [
            'id'=>178,
            'plant_id'=>3,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:18:29',
            'updated_at'=>'2019-11-27 01:18:29'
        ] );

        \App\Data::create( [
            'id'=>179,
            'plant_id'=>3,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:18:59',
            'updated_at'=>'2019-11-27 01:18:59'
        ] );

        \App\Data::create( [
            'id'=>180,
            'plant_id'=>3,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:19:06',
            'updated_at'=>'2019-11-27 01:19:06'
        ] );

        \App\Data::create( [
            'id'=>185,
            'plant_id'=>3,
            'criteria_id'=>8,
            'min_value'=>'Jagung',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:21:46',
            'updated_at'=>'2019-11-27 01:21:46'
        ] );

        \App\Data::create( [
            'id'=>186,
            'plant_id'=>3,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:22:00',
            'updated_at'=>'2019-11-27 01:22:00'
        ] );

        \App\Data::create( [
            'id'=>187,
            'plant_id'=>3,
            'criteria_id'=>8,
            'min_value'=>'Ubi Jalar',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:22:11',
            'updated_at'=>'2019-11-27 01:22:11'
        ] );

        \App\Data::create( [
            'id'=>188,
            'plant_id'=>3,
            'criteria_id'=>8,
            'min_value'=>'Ubi Kayu',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:22:19',
            'updated_at'=>'2019-11-27 01:22:19'
        ] );

        \App\Data::create( [
            'id'=>189,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'22',
            'max_value'=>'25',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:23:54',
            'updated_at'=>'2019-11-27 01:23:54'
        ] );

        \App\Data::create( [
            'id'=>190,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'25',
            'max_value'=>'30',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:24:08',
            'updated_at'=>'2019-11-27 01:24:08'
        ] );

        \App\Data::create( [
            'id'=>191,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>'22',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:24:17',
            'updated_at'=>'2019-11-27 01:24:17'
        ] );

        \App\Data::create( [
            'id'=>192,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'30',
            'max_value'=>'35',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:24:37',
            'updated_at'=>'2019-11-27 01:24:37'
        ] );

        \App\Data::create( [
            'id'=>193,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>'20',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:24:47',
            'updated_at'=>'2019-11-27 01:24:47'
        ] );

        \App\Data::create( [
            'id'=>194,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:24:55',
            'updated_at'=>'2019-11-27 01:24:55'
        ] );

        \App\Data::create( [
            'id'=>195,
            'plant_id'=>4,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'35',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:25:03',
            'updated_at'=>'2019-11-27 01:25:03'
        ] );

        \App\Data::create( [
            'id'=>196,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'800',
            'max_value'=>'1500',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:26:02',
            'updated_at'=>'2019-11-27 01:26:02'
        ] );

        \App\Data::create( [
            'id'=>197,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'600',
            'max_value'=>'800',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:26:15',
            'updated_at'=>'2019-11-27 01:26:15'
        ] );

        \App\Data::create( [
            'id'=>198,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'1500',
            'max_value'=>'2500',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:26:26',
            'updated_at'=>'2019-11-27 01:26:26'
        ] );

        \App\Data::create( [
            'id'=>199,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'400',
            'max_value'=>'600',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:26:39',
            'updated_at'=>'2019-11-27 01:26:39'
        ] );

        \App\Data::create( [
            'id'=>200,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'2500',
            'max_value'=>'4000',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:26:51',
            'updated_at'=>'2019-11-27 01:26:51'
        ] );

        \App\Data::create( [
            'id'=>201,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>'400',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:27:12',
            'updated_at'=>'2019-11-27 01:27:12'
        ] );

        \App\Data::create( [
            'id'=>202,
            'plant_id'=>4,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'4000',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:27:21',
            'updated_at'=>'2019-11-27 01:27:21'
        ] );

        \App\Data::create( [
            'id'=>203,
            'plant_id'=>4,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:27:34',
            'updated_at'=>'2019-11-27 01:27:34'
        ] );

        \App\Data::create( [
            'id'=>204,
            'plant_id'=>4,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:27:42',
            'updated_at'=>'2019-11-27 01:27:42'
        ] );

        \App\Data::create( [
            'id'=>205,
            'plant_id'=>4,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:27:50',
            'updated_at'=>'2019-11-27 01:27:50'
        ] );

        \App\Data::create( [
            'id'=>206,
            'plant_id'=>4,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:27:59',
            'updated_at'=>'2019-11-27 01:27:59'
        ] );

        \App\Data::create( [
            'id'=>207,
            'plant_id'=>4,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'75',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:28:32',
            'updated_at'=>'2019-11-27 01:28:32'
        ] );

        \App\Data::create( [
            'id'=>208,
            'plant_id'=>4,
            'criteria_id'=>4,
            'min_value'=>'50',
            'max_value'=>'75',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:28:48',
            'updated_at'=>'2019-11-27 01:28:48'
        ] );

        \App\Data::create( [
            'id'=>209,
            'plant_id'=>4,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>'50',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:28:55',
            'updated_at'=>'2019-11-27 01:28:55'
        ] );

        \App\Data::create( [
            'id'=>210,
            'plant_id'=>4,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:29:03',
            'updated_at'=>'2019-11-27 01:29:03'
        ] );

        \App\Data::create( [
            'id'=>211,
            'plant_id'=>4,
            'criteria_id'=>5,
            'min_value'=>'5.2',
            'max_value'=>'8.2',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:29:18',
            'updated_at'=>'2019-11-27 01:29:18'
        ] );

        \App\Data::create( [
            'id'=>212,
            'plant_id'=>4,
            'criteria_id'=>5,
            'min_value'=>'4.8',
            'max_value'=>'5.2',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:29:31',
            'updated_at'=>'2019-11-27 01:29:31'
        ] );

        \App\Data::create( [
            'id'=>213,
            'plant_id'=>4,
            'criteria_id'=>5,
            'min_value'=>'8.2',
            'max_value'=>'8.4',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:29:41',
            'updated_at'=>'2019-11-27 01:29:41'
        ] );

        \App\Data::create( [
            'id'=>214,
            'plant_id'=>4,
            'criteria_id'=>5,
            'min_value'=>'4.8',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:29:48',
            'updated_at'=>'2019-11-27 01:29:48'
        ] );

        \App\Data::create( [
            'id'=>215,
            'plant_id'=>4,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'8.4',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:29:59',
            'updated_at'=>'2019-11-27 01:29:59'
        ] );

        \App\Data::create( [
            'id'=>216,
            'plant_id'=>4,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:30:26',
            'updated_at'=>'2019-11-27 01:30:26'
        ] );

        \App\Data::create( [
            'id'=>217,
            'plant_id'=>4,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:30:34',
            'updated_at'=>'2019-11-27 01:30:34'
        ] );

        \App\Data::create( [
            'id'=>218,
            'plant_id'=>4,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:30:43',
            'updated_at'=>'2019-11-27 01:30:43'
        ] );

        \App\Data::create( [
            'id'=>219,
            'plant_id'=>4,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:30:53',
            'updated_at'=>'2019-11-27 01:30:53'
        ] );

        \App\Data::create( [
            'id'=>224,
            'plant_id'=>4,
            'criteria_id'=>8,
            'min_value'=>'Jagung',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:32:25',
            'updated_at'=>'2019-11-27 01:32:25'
        ] );

        \App\Data::create( [
            'id'=>225,
            'plant_id'=>4,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:32:35',
            'updated_at'=>'2019-11-27 01:32:35'
        ] );

        \App\Data::create( [
            'id'=>226,
            'plant_id'=>4,
            'criteria_id'=>8,
            'min_value'=>'Talas',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:32:44',
            'updated_at'=>'2019-11-27 01:32:44'
        ] );

        \App\Data::create( [
            'id'=>227,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>'22',
            'max_value'=>'28',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:38:43',
            'updated_at'=>'2019-11-27 01:38:43'
        ] );

        \App\Data::create( [
            'id'=>228,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>'28',
            'max_value'=>'30',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:38:54',
            'updated_at'=>'2019-11-27 01:38:54'
        ] );

        \App\Data::create( [
            'id'=>229,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>'22',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:40:01',
            'updated_at'=>'2019-11-27 01:40:01'
        ] );

        \App\Data::create( [
            'id'=>230,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>'30',
            'max_value'=>'35',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:40:11',
            'updated_at'=>'2019-11-27 01:40:11'
        ] );

        \App\Data::create( [
            'id'=>231,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:40:19',
            'updated_at'=>'2019-11-27 01:40:19'
        ] );

        \App\Data::create( [
            'id'=>232,
            'plant_id'=>5,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'35',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:40:27',
            'updated_at'=>'2019-11-27 01:40:27'
        ] );

        \App\Data::create( [
            'id'=>233,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'1000',
            'max_value'=>'2000',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:40:36',
            'updated_at'=>'2019-11-27 01:40:36'
        ] );

        \App\Data::create( [
            'id'=>234,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'600',
            'max_value'=>'1000',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:40:45',
            'updated_at'=>'2019-11-27 01:40:45'
        ] );

        \App\Data::create( [
            'id'=>235,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'2000',
            'max_value'=>'3000',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:40:54',
            'updated_at'=>'2019-11-27 01:40:54'
        ] );

        \App\Data::create( [
            'id'=>236,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'500',
            'max_value'=>'600',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:41:05',
            'updated_at'=>'2019-11-27 01:41:05'
        ] );

        \App\Data::create( [
            'id'=>237,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'3000',
            'max_value'=>'4000',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:41:13',
            'updated_at'=>'2019-11-27 01:41:13'
        ] );

        \App\Data::create( [
            'id'=>238,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>'500',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:41:24',
            'updated_at'=>'2019-11-27 01:41:24'
        ] );

        \App\Data::create( [
            'id'=>239,
            'plant_id'=>5,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'4000',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:41:34',
            'updated_at'=>'2019-11-27 01:41:34'
        ] );

        \App\Data::create( [
            'id'=>240,
            'plant_id'=>5,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:41:55',
            'updated_at'=>'2019-11-27 01:41:55'
        ] );

        \App\Data::create( [
            'id'=>241,
            'plant_id'=>5,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:42:06',
            'updated_at'=>'2019-11-27 01:42:06'
        ] );

        \App\Data::create( [
            'id'=>242,
            'plant_id'=>5,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:42:15',
            'updated_at'=>'2019-11-27 01:42:15'
        ] );

        \App\Data::create( [
            'id'=>243,
            'plant_id'=>5,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:42:24',
            'updated_at'=>'2019-11-27 01:42:24'
        ] );

        \App\Data::create( [
            'id'=>244,
            'plant_id'=>5,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'100',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:42:37',
            'updated_at'=>'2019-11-27 01:42:37'
        ] );

        \App\Data::create( [
            'id'=>245,
            'plant_id'=>5,
            'criteria_id'=>4,
            'min_value'=>'75',
            'max_value'=>'100',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:42:47',
            'updated_at'=>'2019-11-27 01:42:47'
        ] );

        \App\Data::create( [
            'id'=>246,
            'plant_id'=>5,
            'criteria_id'=>4,
            'min_value'=>'50',
            'max_value'=>'75',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:42:55',
            'updated_at'=>'2019-11-27 01:42:55'
        ] );

        \App\Data::create( [
            'id'=>247,
            'plant_id'=>5,
            'criteria_id'=>4,
            'min_value'=>'50',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:43:05',
            'updated_at'=>'2019-11-27 01:43:05'
        ] );

        \App\Data::create( [
            'id'=>248,
            'plant_id'=>5,
            'criteria_id'=>5,
            'min_value'=>'5.2',
            'max_value'=>'7',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:43:14',
            'updated_at'=>'2019-11-27 01:43:14'
        ] );

        \App\Data::create( [
            'id'=>249,
            'plant_id'=>5,
            'criteria_id'=>5,
            'min_value'=>'4.8',
            'max_value'=>'5.2',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:44:25',
            'updated_at'=>'2019-11-27 01:44:25'
        ] );

        \App\Data::create( [
            'id'=>250,
            'plant_id'=>5,
            'criteria_id'=>5,
            'min_value'=>'7',
            'max_value'=>'7.8',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:45:06',
            'updated_at'=>'2019-11-27 01:45:06'
        ] );

        \App\Data::create( [
            'id'=>251,
            'plant_id'=>5,
            'criteria_id'=>5,
            'min_value'=>'4.8',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:45:22',
            'updated_at'=>'2019-11-27 01:45:22'
        ] );

        \App\Data::create( [
            'id'=>252,
            'plant_id'=>5,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'7.8',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:45:33',
            'updated_at'=>'2019-11-27 01:45:33'
        ] );

        \App\Data::create( [
            'id'=>253,
            'plant_id'=>5,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:46:36',
            'updated_at'=>'2019-11-27 01:46:36'
        ] );

        \App\Data::create( [
            'id'=>254,
            'plant_id'=>5,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:46:45',
            'updated_at'=>'2019-11-27 01:46:45'
        ] );

        \App\Data::create( [
            'id'=>255,
            'plant_id'=>5,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:46:53',
            'updated_at'=>'2019-11-27 01:46:53'
        ] );

        \App\Data::create( [
            'id'=>256,
            'plant_id'=>5,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:47:03',
            'updated_at'=>'2019-11-27 01:47:03'
        ] );

        \App\Data::create( [
            'id'=>261,
            'plant_id'=>5,
            'criteria_id'=>8,
            'min_value'=>'Jagung',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:48:36',
            'updated_at'=>'2019-11-27 01:48:36'
        ] );

        \App\Data::create( [
            'id'=>262,
            'plant_id'=>5,
            'criteria_id'=>8,
            'min_value'=>'Kacang Tanah',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:48:44',
            'updated_at'=>'2019-11-27 01:48:44'
        ] );

        \App\Data::create( [
            'id'=>263,
            'plant_id'=>5,
            'criteria_id'=>8,
            'min_value'=>'Talas',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:48:52',
            'updated_at'=>'2019-11-27 01:48:52'
        ] );

        \App\Data::create( [
            'id'=>264,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'25',
            'max_value'=>'27',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:50:22',
            'updated_at'=>'2019-11-27 01:50:22'
        ] );

        \App\Data::create( [
            'id'=>265,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'20',
            'max_value'=>'25',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:50:29',
            'updated_at'=>'2019-11-27 01:50:29'
        ] );

        \App\Data::create( [
            'id'=>266,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'27',
            'max_value'=>'30',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:50:38',
            'updated_at'=>'2019-11-27 01:50:38'
        ] );

        \App\Data::create( [
            'id'=>267,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>'20',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:50:45',
            'updated_at'=>'2019-11-27 01:50:45'
        ] );

        \App\Data::create( [
            'id'=>268,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'30',
            'max_value'=>'34',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:50:52',
            'updated_at'=>'2019-11-27 01:50:52'
        ] );

        \App\Data::create( [
            'id'=>269,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>'18',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:50:57',
            'updated_at'=>'2019-11-27 01:50:57'
        ] );

        \App\Data::create( [
            'id'=>270,
            'plant_id'=>6,
            'criteria_id'=>1,
            'min_value'=>NULL,
            'max_value'=>'34',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:51:07',
            'updated_at'=>'2019-11-27 01:51:07'
        ] );

        \App\Data::create( [
            'id'=>271,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'400',
            'max_value'=>'1100',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:51:35',
            'updated_at'=>'2019-11-27 01:51:35'
        ] );

        \App\Data::create( [
            'id'=>272,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'1100',
            'max_value'=>'1600',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:51:42',
            'updated_at'=>'2019-11-27 01:51:42'
        ] );

        \App\Data::create( [
            'id'=>273,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'300',
            'max_value'=>'400',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:51:51',
            'updated_at'=>'2019-11-27 01:51:51'
        ] );

        \App\Data::create( [
            'id'=>274,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'1600',
            'max_value'=>'1900',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:51:59',
            'updated_at'=>'2019-11-27 01:51:59'
        ] );

        \App\Data::create( [
            'id'=>275,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'200',
            'max_value'=>'300',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:52:05',
            'updated_at'=>'2019-11-27 01:52:05'
        ] );

        \App\Data::create( [
            'id'=>276,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>'200',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:52:12',
            'updated_at'=>'2019-11-27 01:52:12'
        ] );

        \App\Data::create( [
            'id'=>277,
            'plant_id'=>6,
            'criteria_id'=>2,
            'min_value'=>NULL,
            'max_value'=>'1900',
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:52:19',
            'updated_at'=>'2019-11-27 01:52:19'
        ] );

        \App\Data::create( [
            'id'=>278,
            'plant_id'=>6,
            'criteria_id'=>3,
            'min_value'=>'Agak Halus',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:53:04',
            'updated_at'=>'2019-11-27 01:53:04'
        ] );

        \App\Data::create( [
            'id'=>279,
            'plant_id'=>6,
            'criteria_id'=>3,
            'min_value'=>'Agak Kasar',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:53:12',
            'updated_at'=>'2019-11-27 01:53:12'
        ] );

        \App\Data::create( [
            'id'=>280,
            'plant_id'=>6,
            'criteria_id'=>3,
            'min_value'=>'Halus',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:53:20',
            'updated_at'=>'2019-11-27 01:53:20'
        ] );

        \App\Data::create( [
            'id'=>281,
            'plant_id'=>6,
            'criteria_id'=>3,
            'min_value'=>'Kasar',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:53:27',
            'updated_at'=>'2019-11-27 01:53:27'
        ] );

        \App\Data::create( [
            'id'=>282,
            'plant_id'=>6,
            'criteria_id'=>4,
            'min_value'=>NULL,
            'max_value'=>'75',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:53:38',
            'updated_at'=>'2019-11-27 01:53:38'
        ] );

        \App\Data::create( [
            'id'=>283,
            'plant_id'=>6,
            'criteria_id'=>4,
            'min_value'=>'50',
            'max_value'=>'75',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:53:45',
            'updated_at'=>'2019-11-27 01:53:45'
        ] );

        \App\Data::create( [
            'id'=>284,
            'plant_id'=>6,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>'50',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:53:54',
            'updated_at'=>'2019-11-27 01:53:54'
        ] );

        \App\Data::create( [
            'id'=>285,
            'plant_id'=>6,
            'criteria_id'=>4,
            'min_value'=>'25',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:54:01',
            'updated_at'=>'2019-11-27 01:54:01'
        ] );

        \App\Data::create( [
            'id'=>286,
            'plant_id'=>6,
            'criteria_id'=>5,
            'min_value'=>'6',
            'max_value'=>'7',
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:54:15',
            'updated_at'=>'2019-11-27 01:54:15'
        ] );

        \App\Data::create( [
            'id'=>287,
            'plant_id'=>6,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>'6',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:54:24',
            'updated_at'=>'2019-11-27 01:54:24'
        ] );

        \App\Data::create( [
            'id'=>288,
            'plant_id'=>6,
            'criteria_id'=>5,
            'min_value'=>'7',
            'max_value'=>'7.5',
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:54:32',
            'updated_at'=>'2019-11-27 01:54:32'
        ] );

        \App\Data::create( [
            'id'=>289,
            'plant_id'=>6,
            'criteria_id'=>5,
            'min_value'=>'5',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:54:40',
            'updated_at'=>'2019-11-27 01:54:40'
        ] );

        \App\Data::create( [
            'id'=>290,
            'plant_id'=>6,
            'criteria_id'=>5,
            'min_value'=>NULL,
            'max_value'=>'7.5',
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:54:47',
            'updated_at'=>'2019-11-27 01:54:47'
        ] );

        \App\Data::create( [
            'id'=>291,
            'plant_id'=>6,
            'criteria_id'=>6,
            'min_value'=>'Tidak ada',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:55:11',
            'updated_at'=>'2019-11-27 01:55:11'
        ] );

        \App\Data::create( [
            'id'=>292,
            'plant_id'=>6,
            'criteria_id'=>6,
            'min_value'=>'Ringan',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:55:20',
            'updated_at'=>'2019-11-27 01:55:20'
        ] );

        \App\Data::create( [
            'id'=>293,
            'plant_id'=>6,
            'criteria_id'=>6,
            'min_value'=>'Sedang',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:55:26',
            'updated_at'=>'2019-11-27 01:55:26'
        ] );

        \App\Data::create( [
            'id'=>294,
            'plant_id'=>6,
            'criteria_id'=>6,
            'min_value'=>'Berat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-11-27 01:55:34',
            'updated_at'=>'2019-11-27 01:55:34'
        ] );

        \App\Data::create( [
            'id'=>299,
            'plant_id'=>6,
            'criteria_id'=>8,
            'min_value'=>'Jagung',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-11-27 01:56:11',
            'updated_at'=>'2019-11-27 01:56:11'
        ] );

        \App\Data::create( [
            'id'=>300,
            'plant_id'=>6,
            'criteria_id'=>8,
            'min_value'=>'Ubi Jalar',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:56:18',
            'updated_at'=>'2019-11-27 01:56:18'
        ] );

        \App\Data::create( [
            'id'=>301,
            'plant_id'=>6,
            'criteria_id'=>8,
            'min_value'=>'Ubi Kayu',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-11-27 01:56:29',
            'updated_at'=>'2019-11-27 01:56:29'
        ] );

        \App\Data::create( [
            'id'=>302,
            'plant_id'=>6,
            'criteria_id'=>8,
            'min_value'=>'Padi',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-11-27 01:56:38',
            'updated_at'=>'2019-11-27 01:56:38'
        ] );

        \App\Data::create( [
            'id'=>304,
            'plant_id'=>1,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:30:32',
            'updated_at'=>'2019-12-03 11:30:32'
        ] );

        \App\Data::create( [
            'id'=>305,
            'plant_id'=>1,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:30:46',
            'updated_at'=>'2019-12-03 11:30:46'
        ] );

        \App\Data::create( [
            'id'=>306,
            'plant_id'=>1,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:30:52',
            'updated_at'=>'2019-12-03 11:30:52'
        ] );

        \App\Data::create( [
            'id'=>307,
            'plant_id'=>1,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:31:13',
            'updated_at'=>'2019-12-03 11:31:13'
        ] );

        \App\Data::create( [
            'id'=>308,
            'plant_id'=>1,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:31:26',
            'updated_at'=>'2019-12-03 11:31:26'
        ] );

        \App\Data::create( [
            'id'=>309,
            'plant_id'=>2,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:31:48',
            'updated_at'=>'2019-12-03 11:31:48'
        ] );

        \App\Data::create( [
            'id'=>310,
            'plant_id'=>2,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:32:15',
            'updated_at'=>'2019-12-03 11:32:15'
        ] );

        \App\Data::create( [
            'id'=>311,
            'plant_id'=>2,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:32:22',
            'updated_at'=>'2019-12-03 11:32:22'
        ] );

        \App\Data::create( [
            'id'=>312,
            'plant_id'=>2,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:32:39',
            'updated_at'=>'2019-12-03 11:32:39'
        ] );

        \App\Data::create( [
            'id'=>313,
            'plant_id'=>2,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:32:48',
            'updated_at'=>'2019-12-03 11:32:48'
        ] );

        \App\Data::create( [
            'id'=>314,
            'plant_id'=>3,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:32:58',
            'updated_at'=>'2019-12-03 11:32:58'
        ] );

        \App\Data::create( [
            'id'=>315,
            'plant_id'=>3,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:33:07',
            'updated_at'=>'2019-12-03 11:33:07'
        ] );

        \App\Data::create( [
            'id'=>316,
            'plant_id'=>3,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:33:20',
            'updated_at'=>'2019-12-03 11:33:20'
        ] );

        \App\Data::create( [
            'id'=>317,
            'plant_id'=>3,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:33:30',
            'updated_at'=>'2019-12-03 11:33:30'
        ] );

        \App\Data::create( [
            'id'=>318,
            'plant_id'=>3,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:33:37',
            'updated_at'=>'2019-12-03 11:33:37'
        ] );

        \App\Data::create( [
            'id'=>319,
            'plant_id'=>4,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:33:57',
            'updated_at'=>'2019-12-03 11:33:57'
        ] );

        \App\Data::create( [
            'id'=>320,
            'plant_id'=>4,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:34:05',
            'updated_at'=>'2019-12-03 11:34:05'
        ] );

        \App\Data::create( [
            'id'=>321,
            'plant_id'=>4,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:34:13',
            'updated_at'=>'2019-12-03 11:34:13'
        ] );

        \App\Data::create( [
            'id'=>322,
            'plant_id'=>4,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:34:20',
            'updated_at'=>'2019-12-03 11:34:20'
        ] );

        \App\Data::create( [
            'id'=>323,
            'plant_id'=>4,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:34:26',
            'updated_at'=>'2019-12-03 11:34:26'
        ] );

        \App\Data::create( [
            'id'=>324,
            'plant_id'=>5,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:34:36',
            'updated_at'=>'2019-12-03 11:34:36'
        ] );

        \App\Data::create( [
            'id'=>325,
            'plant_id'=>5,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:34:42',
            'updated_at'=>'2019-12-03 11:34:42'
        ] );

        \App\Data::create( [
            'id'=>326,
            'plant_id'=>5,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:34:48',
            'updated_at'=>'2019-12-03 11:34:48'
        ] );

        \App\Data::create( [
            'id'=>327,
            'plant_id'=>5,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:34:54',
            'updated_at'=>'2019-12-03 11:34:54'
        ] );

        \App\Data::create( [
            'id'=>328,
            'plant_id'=>5,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:35:01',
            'updated_at'=>'2019-12-03 11:35:01'
        ] );

        \App\Data::create( [
            'id'=>329,
            'plant_id'=>6,
            'criteria_id'=>7,
            'min_value'=>'Baik',
            'max_value'=>NULL,
            'parameter'=>1,
            'created_at'=>'2019-12-03 11:35:25',
            'updated_at'=>'2019-12-03 11:35:25'
        ] );

        \App\Data::create( [
            'id'=>330,
            'plant_id'=>6,
            'criteria_id'=>7,
            'min_value'=>'Agak Terhambat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:35:31',
            'updated_at'=>'2019-12-03 11:35:31'
        ] );

        \App\Data::create( [
            'id'=>331,
            'plant_id'=>6,
            'criteria_id'=>7,
            'min_value'=>'Agak Cepat',
            'max_value'=>NULL,
            'parameter'=>2,
            'created_at'=>'2019-12-03 11:35:39',
            'updated_at'=>'2019-12-03 11:35:39'
        ] );

        \App\Data::create( [
            'id'=>332,
            'plant_id'=>6,
            'criteria_id'=>7,
            'min_value'=>'Terhambat',
            'max_value'=>NULL,
            'parameter'=>3,
            'created_at'=>'2019-12-03 11:35:45',
            'updated_at'=>'2019-12-03 11:35:45'
        ] );

        \App\Data::create( [
            'id'=>333,
            'plant_id'=>6,
            'criteria_id'=>7,
            'min_value'=>'Cepat',
            'max_value'=>NULL,
            'parameter'=>4,
            'created_at'=>'2019-12-03 11:35:53',
            'updated_at'=>'2019-12-03 11:35:53'
        ] );
    }
}
