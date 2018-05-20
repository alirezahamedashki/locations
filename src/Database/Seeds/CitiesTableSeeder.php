<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    City::insert([
            [
                'id' => 1,
                'province_id' => 1,
                'county_id' => 1,
                'name' => 'آذرشهر',
                'en_name' => 'Azarshahr',
                'latitude' => '37.7560129',
                'longitude' => '45.9540934',
            ],
            [
                'id' => 2,
                'province_id' => 1,
                'county_id' => 1,
                'name' => 'تیمورلو',
                'en_name' => 'Teymourlou',
                'latitude' => '37.8104085',
                'longitude' => '45.8815454',
            ],
            [
                'id' => 3,
                'province_id' => 1,
                'county_id' => 1,
                'name' => 'گوگان',
                'en_name' => 'Gogan',
                'latitude' => '37.7815346',
                'longitude' => '45.8983255',
            ],
            [
                'id' => 4,
                'province_id' => 1,
                'county_id' => 1,
                'name' => 'ممقان',
                'en_name' => 'Mamaqan',
                'latitude' => '37.8561644',
                'longitude' => '45.9274841',
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'county_id' => 2,
                'name' => 'اسکو',
                'en_name' => 'Osku',
                'latitude' => '37.9041424',
                'longitude' => '46.1085588',
            ],
            [
                'id' => 6,
                'province_id' => 1,
                'county_id' => 2,
                'name' => 'ایلخچی',
                'en_name' => 'Ilkhichi',
                'latitude' => '37.9374859',
                'longitude' => '45.9433216',
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'county_id' => 2,
                'name' => 'سهند',
                'en_name' => 'Sahand',
                'latitude' => '37.9421284',
                'longitude' => '46.1131704',
            ],
            [
                'id' => 8,
                'province_id' => 1,
                'county_id' => 3,
                'name' => 'اهر',
                'en_name' => 'Ahar',
                'latitude' => '38.4801231',
                'longitude' => '47.0367187',
            ],
            [
                'id' => 9,
                'province_id' => 1,
                'county_id' => 3,
                'name' => 'هوراند',
                'en_name' => 'Hurand',
                'latitude' => '38.859167',
                'longitude' => '47.368611',
            ],
            [
                'id' => 10,
                'province_id' => 1,
                'county_id' => 4,
                'name' => 'بستان آباد',
                'en_name' => 'Bostan Abad',
                'latitude' => '37.839493',
                'longitude' => '46.8096327',
            ],
            [
                'id' => 11,
                'province_id' => 1,
                'county_id' => 4,
                'name' => 'تیکمه داش',
                'en_name' => 'Tekmeh Dash',
                'latitude' => '37.7353554',
                'longitude' => '46.9308898',
            ],
            [
                'id' => 12,
                'province_id' => 1,
                'county_id' => 5,
                'name' => 'بناب',
                'en_name' => 'Bonab',
                'latitude' => '37.3436672',
                'longitude' => '46.0264272',
            ],
            [
                'id' => 13,
                'province_id' => 1,
                'county_id' => 6,
                'name' => 'باسمنج',
                'en_name' => 'Basmenj',
                'latitude' => '38.0013316',
                'longitude' => '46.4462469',
            ],
            [
                'id' => 14,
                'province_id' => 1,
                'county_id' => 6,
                'name' => 'تبریز',
                'en_name' => 'Tabriz',
                'latitude' => '38.0805555',
                'longitude' => '46.1536413',
            ],
            [
                'id' => 15,
                'province_id' => 1,
                'county_id' => 6,
                'name' => 'خسروشاه',
                'en_name' => 'Khosrowshah',
                'latitude' => '37.9633046',
                'longitude' => '46.0150331',
            ],
            [
                'id' => 16,
                'province_id' => 1,
                'county_id' => 6,
                'name' => 'سردرود',
                'en_name' => 'Sardroud',
                'latitude' => '38.0312385',
                'longitude' => '46.1297363',
            ],
            [
                'id' => 17,
                'province_id' => 1,
                'county_id' => 7,
                'name' => 'جلفا',
                'en_name' => 'Jolfa',
                'latitude' => '38.8161685',
                'longitude' => '45.6333948',
            ],
            [
                'id' => 18,
                'province_id' => 1,
                'county_id' => 7,
                'name' => 'سیه رود',
                'en_name' => 'Siahrood',
                'latitude' => '38.8687745',
                'longitude' => '45.9966552',
            ],
            [
                'id' => 19,
                'province_id' => 1,
                'county_id' => 7,
                'name' => 'هادیشهر',
                'en_name' => 'Hadishahr',
                'latitude' => '38.828331',
                'longitude' => '45.6217998',
            ],
            [
                'id' => 20,
                'province_id' => 1,
                'county_id' => 8,
                'name' => 'قره آغاج',
                'en_name' => 'Qareh Aghaj',
                'latitude' => '37.1285619',
                'longitude' => '46.9647825',
            ],
            [
                'id' => 21,
                'province_id' => 1,
                'county_id' => 9,
                'name' => 'خمارلو',
                'en_name' => 'Khomarlu',
                'latitude' => '39.1545566',
                'longitude' => '47.0248317',
            ],
            [
                'id' => 22,
                'province_id' => 1,
                'county_id' => 10,
                'name' => 'دوزدوزان',
                'en_name' => 'Duzduzan',
                'latitude' => '37.9487574',
                'longitude' => '47.1140957',
            ],
            [
                'id' => 23,
                'province_id' => 1,
                'county_id' => 10,
                'name' => 'سراب',
                'en_name' => 'Sarab',
                'latitude' => '37.939977',
                'longitude' => '47.5154373',
            ],
            [
                'id' => 24,
                'province_id' => 1,
                'county_id' => 10,
                'name' => 'شربیان',
                'en_name' => 'Sharabian',
                'latitude' => '37.8819242',
                'longitude' => '47.0954919',
            ],
            [
                'id' => 25,
                'province_id' => 1,
                'county_id' => 10,
                'name' => 'مهربان',
                'en_name' => 'Mehraban',
                'latitude' => '38.0814817',
                'longitude' => '47.1282577',
            ],
            [
                'id' => 26,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'تسوج',
                'en_name' => 'Tasuj',
                'latitude' => '38.3161504',
                'longitude' => '45.3365419',
            ],
            [
                'id' => 27,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'خامنه',
                'en_name' => 'Khamaneh',
                'latitude' => '38.1852356',
                'longitude' => '45.6130884',
            ],
            [
                'id' => 28,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'سیس',
                'en_name' => 'Sis',
                'latitude' => '38.1968587',
                'longitude' => '45.8107566',
            ],
            [
                'id' => 29,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'شبستر',
                'en_name' => 'Shabestar',
                'latitude' => '38.1827399',
                'longitude' => '45.6819246',
            ],
            [
                'id' => 30,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'شرفخانه',
                'en_name' => 'Sharafkhaneh',
                'latitude' => '38.1786571',
                'longitude' => '45.4678629',
            ],
            [
                'id' => 31,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'شندآباد',
                'en_name' => 'Shendabad',
                'latitude' => '38.1456101',
                'longitude' => '45.6190539',
            ],
            [
                'id' => 32,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'صوفیان',
                'en_name' => 'Soufian',
                'latitude' => '38.2783136',
                'longitude' => '45.9770966',
            ],
            [
                'id' => 33,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'کوزه کنان',
                'en_name' => 'Koozehkonan',
                'latitude' => '38.1932024',
                'longitude' => '45.5432863',
            ],
            [
                'id' => 34,
                'province_id' => 1,
                'county_id' => 11,
                'name' => 'وایقان',
                'en_name' => 'Vaighan',
                'latitude' => '38.1284459',
                'longitude' => '45.704906',
            ],
            [
                'id' => 35,
                'province_id' => 1,
                'county_id' => 12,
                'name' => 'جوان قلعه',
                'en_name' => 'Javan Qala',
                'latitude' => '37.4971417',
                'longitude' => '45.9718608',
            ],
            [
                'id' => 36,
                'province_id' => 1,
                'county_id' => 12,
                'name' => 'عجب شیر',
                'en_name' => 'Ajabshir',
                'latitude' => '37.4825847',
                'longitude' => '45.8735846',
            ],
            [
                'id' => 37,
                'province_id' => 1,
                'county_id' => 13,
                'name' => 'آبش احمد',
                'en_name' => 'Abeshahmad',
                'latitude' => '39.0497674',
                'longitude' => '47.3075579',
            ],
            [
                'id' => 38,
                'province_id' => 1,
                'county_id' => 13,
                'name' => 'کلیبر',
                'en_name' => 'Kaleybar',
                'latitude' => '38.8667258',
                'longitude' => '47.0245312',
            ],
            [
                'id' => 39,
                'province_id' => 1,
                'county_id' => 14,
                'name' => 'خداجو',
                'en_name' => 'Kharajoo',
                'latitude' => '37.3097814',
                'longitude' => '46.5217136',
            ],
            [
                'id' => 40,
                'province_id' => 1,
                'county_id' => 14,
                'name' => 'مراغه',
                'en_name' => 'Maragheh',
                'latitude' => '37.3808819',
                'longitude' => '46.1906857',
            ],
            [
                'id' => 41,
                'province_id' => 1,
                'county_id' => 15,
                'name' => 'بناب مرند',
                'en_name' => 'Benab e Marand',
                'latitude' => '38.4281011',
                'longitude' => '45.9022522',
            ],
            [
                'id' => 42,
                'province_id' => 1,
                'county_id' => 15,
                'name' => 'زنوز',
                'en_name' => 'Zonouz',
                'latitude' => '38.5894951',
                'longitude' => '45.8261419',
            ],
            [
                'id' => 43,
                'province_id' => 1,
                'county_id' => 15,
                'name' => 'کشکسرای',
                'en_name' => 'Koshksaray',
                'latitude' => '38.4596201',
                'longitude' => '45.5569553',
            ],
            [
                'id' => 44,
                'province_id' => 1,
                'county_id' => 15,
                'name' => 'مرند',
                'en_name' => 'Marand',
                'latitude' => '38.4238783',
                'longitude' => '45.7330793',
            ],
            [
                'id' => 45,
                'province_id' => 1,
                'county_id' => 15,
                'name' => 'یامچی',
                'en_name' => 'Yamchi',
                'latitude' => '38.5244774',
                'longitude' => '45.6341648',
            ],
            [
                'id' => 46,
                'province_id' => 1,
                'county_id' => 16,
                'name' => 'لیلان',
                'en_name' => 'Leilan',
                'latitude' => '37.0116509',
                'longitude' => '46.1952352',
            ],
            [
                'id' => 47,
                'province_id' => 1,
                'county_id' => 16,
                'name' => 'مبارک شهر',
                'en_name' => 'Mobarak Abad',
                'latitude' => '37.180304',
                'longitude' => '46.0507178',
            ],
            [
                'id' => 48,
                'province_id' => 1,
                'county_id' => 16,
                'name' => 'ملکان',
                'en_name' => 'Malekan',
                'latitude' => '37.1464475',
                'longitude' => '46.0862515',
            ],
            [
                'id' => 49,
                'province_id' => 1,
                'county_id' => 17,
                'name' => 'آقکند',
                'en_name' => 'Aqkend',
                'latitude' => '37.2577699',
                'longitude' => '48.0614304',
            ],
            [
                'id' => 50,
                'province_id' => 1,
                'county_id' => 17,
                'name' => 'اچاچی',
                'en_name' => 'Achachi',
                'latitude' => '37.3954338',
                'longitude' => '47.7903987',
            ],
            [
                'id' => 51,
                'province_id' => 1,
                'county_id' => 17,
                'name' => 'ترک',
                'en_name' => 'Tark',
                'latitude' => '37.6173671',
                'longitude' => '47.7667307',
            ],
            [
                'id' => 52,
                'province_id' => 1,
                'county_id' => 17,
                'name' => 'ترکمانچای',
                'en_name' => 'Turkman Chay',
                'latitude' => '37.5817898',
                'longitude' => '47.3702143',
            ],
            [
                'id' => 53,
                'province_id' => 1,
                'county_id' => 17,
                'name' => 'میانه',
                'en_name' => 'Mianeh',
                'latitude' => '37.4272862',
                'longitude' => '47.6911778',
            ],
            [
                'id' => 54,
                'province_id' => 1,
                'county_id' => 18,
                'name' => 'خاروانا',
                'en_name' => 'Kharvana',
                'latitude' => '38.6856095',
                'longitude' => '46.159873',
            ],
            [
                'id' => 55,
                'province_id' => 1,
                'county_id' => 18,
                'name' => 'ورزقان',
                'en_name' => 'Varzeqān',
                'latitude' => '38.5813659',
                'longitude' => '46.170008',
            ],
            [
                'id' => 56,
                'province_id' => 1,
                'county_id' => 19,
                'name' => 'بخشایش',
                'en_name' => 'Bakhshāyesh',
                'latitude' => '38.1311381',
                'longitude' => '46.9380891',
            ],
            [
                'id' => 57,
                'province_id' => 1,
                'county_id' => 19,
                'name' => 'خواجه',
                'en_name' => 'Khaje',
                'latitude' => '38.1527567',
                'longitude' => '46.5823746',
            ],
            [
                'id' => 58,
                'province_id' => 1,
                'county_id' => 19,
                'name' => 'زرنق',
                'en_name' => 'Zarnaq',
                'latitude' => '38.0924087',
                'longitude' => '47.0768023',
            ],
            [
                'id' => 59,
                'province_id' => 1,
                'county_id' => 19,
                'name' => 'کلوانق',
                'en_name' => 'Kelvanaq',
                'latitude' => '38.1024979',
                'longitude' => '46.9848346',
            ],
            [
                'id' => 60,
                'province_id' => 1,
                'county_id' => 19,
                'name' => 'هریس',
                'en_name' => 'Heris',
                'latitude' => '38.2495209',
                'longitude' => '47.1078729',
            ],
            [
                'id' => 61,
                'province_id' => 1,
                'county_id' => 20,
                'name' => 'نظر کهریزی',
                'en_name' => 'Nazarkahrizi',
                'latitude' => '37.3473706',
                'longitude' => '46.7596042',
            ],
            [
                'id' => 62,
                'province_id' => 1,
                'county_id' => 20,
                'name' => 'هشترود',
                'en_name' => 'Hashtrood',
                'latitude' => '37.4775029',
                'longitude' => '47.0369873',
            ],
            [
			    'id' => 317,
			    'province_id' => 8,
			    'county_id' => 98,
			    'name' => 'احمد آباد مستوفي',
			    'en_name' => 'Ahmadabad-E Mostowfi',
			    'latitude' => '35.6351851',
			    'longitude' => '51.203692',
		    ],
		    [
			    'id' => 318,
			    'province_id' => 8,
			    'county_id' => 98,
			    'name' => 'اسلامشهر',
			    'en_name' => 'Eslamshahr',
			    'latitude' => '35.5826021',
			    'longitude' => '51.1218216',
		    ],
		    [
			    'id' => 319,
			    'province_id' => 8,
			    'county_id' => 98,
			    'name' => 'چهاردانگه',
			    'en_name' => 'Chahar Dangeh',
			    'latitude' => '35.596159 ',
			    'longitude' => '51.315565',
		    ],
		    [
			    'id' => 320,
			    'province_id' => 8,
			    'county_id' => 99,
			    'name' => 'صالحيه',
			    'en_name' => 'salehie',
			    'latitude' => '35.5999212',
			    'longitude' => '51.2827227',
		    ],
		    [
			    'id' => 321,
			    'province_id' => 8,
			    'county_id' => 99,
			    'name' => 'گلستان',
			    'en_name' => 'Golestan',
			    'latitude' => '35.5207449',
			    'longitude' => '51.170175',
		    ],
		    [
			    'id' => 322,
			    'province_id' => 8,
			    'county_id' => 99,
			    'name' => 'نسيم شهر',
			    'en_name' => 'Nasimshahr',
			    'latitude' => '35.5638588',
			    'longitude' => '51.1396836',
		    ],
		    [
			    'id' => 323,
			    'province_id' => 8,
			    'county_id' => 100,
			    'name' => 'پاکدشت',
			    'en_name' => 'Pakdasht',
			    'latitude' => '35.4449805',
			    'longitude' => '51.6195967',
		    ],
		    [
			    'id' => 324,
			    'province_id' => 8,
			    'county_id' => 100,
			    'name' => 'شريف آباد',
			    'en_name' => 'Sharifabad',
			    'latitude' => '35.4273131',
			    'longitude' => '51.768608',
		    ],
		    [
			    'id' => 325,
			    'province_id' => 8,
			    'county_id' => 100,
			    'name' => 'فرون اباد',
			    'en_name' => 'Ferunabad',
			    'latitude' => '35.5145631',
			    'longitude' => '51.6100732',
		    ],
		    [
			    'id' => 326,
			    'province_id' => 8,
			    'county_id' => 101,
			    'name' => 'بومهن',
			    'en_name' => 'Bumehen',
			    'latitude' => '35.733646',
			    'longitude' => '51.868124',
		    ],
		    [
			    'id' => 327,
			    'province_id' => 8,
			    'county_id' => 101,
			    'name' => 'پرديس',
			    'en_name' => 'Pardis',
			    'latitude' => '35.741701',
			    'longitude' => '51.780801',
		    ],
		    [
			    'id' => 328,
			    'province_id' => 8,
			    'county_id' => 102,
			    'name' => 'پيشوا',
			    'en_name' => 'Pishva',
			    'latitude' => '35.307785',
			    'longitude' => '51.730872',
		    ],
		    [
			    'id' => 329,
			    'province_id' => 8,
			    'county_id' => 103,
			    'name' => 'تهران',
			    'en_name' => 'Tehran',
			    'latitude' => '35.689198 ',
			    'longitude' => '51.388974',
		    ],
		    [
			    'id' => 330,
			    'province_id' => 8,
			    'county_id' => 104,
			    'name' => 'آبسرد',
			    'en_name' => 'Absard',
			    'latitude' => '35.6293144',
			    'longitude' => '52.1340745',
		    ],
		    [
			    'id' => 331,
			    'province_id' => 8,
			    'county_id' => 104,
			    'name' => 'آبعلي',
			    'en_name' => 'Abali',
			    'latitude' => '35.767596',
			    'longitude' => '51.9412993',
		    ],
		    [
			    'id' => 332,
			    'province_id' => 8,
			    'county_id' => 104,
			    'name' => 'دماوند',
			    'en_name' => 'Damavand',
			    'latitude' => '35.7086615',
			    'longitude' => '52.0100624',
		    ],
		    [
			    'id' => 333,
			    'province_id' => 8,
			    'county_id' => 104,
			    'name' => 'رودهن',
			    'en_name' => 'Rudehen',
			    'latitude' => '35.7338129',
			    'longitude' => '51.8981265',
		    ],
		    [
			    'id' => 334,
			    'province_id' => 8,
			    'county_id' => 104,
			    'name' => 'کيلان',
			    'en_name' => 'Kilan',
			    'latitude' => '35.5526704',
			    'longitude' => '52.1162218',
		    ],
		    [
			    'id' => 335,
			    'province_id' => 8,
			    'county_id' => 105,
			    'name' => 'پرند',
			    'en_name' => 'Parand',
			    'latitude' => '35.4902611',
			    'longitude' => '50.9181541',
		    ],
		    [
			    'id' => 336,
			    'province_id' => 8,
			    'county_id' => 105,
			    'name' => 'رباطکريم',
			    'en_name' => 'Robat Karim',
			    'latitude' => '35.4752344',
			    'longitude' => '51.0473293',
		    ],
		    [
			    'id' => 337,
			    'province_id' => 8,
			    'county_id' => 105,
			    'name' => 'نصيرشهر',
			    'en_name' => 'Nasirshahr',
			    'latitude' => '35.4903116',
			    'longitude' => '51.1323023',
		    ],
		    [
			    'id' => 338,
			    'province_id' => 8,
			    'county_id' => 106,
			    'name' => 'باقرشهر',
			    'en_name' => 'Baghershahr',
			    'latitude' => '35.5335618',
			    'longitude' => '51.3954691',
		    ],
		    [
			    'id' => 339,
			    'province_id' => 8,
			    'county_id' => 106,
			    'name' => 'حسن آباد',
			    'en_name' => 'Hasanabad',
			    'latitude' => '35.3695228',
			    'longitude' => '51.2215231',
		    ],  [
			    'id' => 340,
			    'province_id' => 8,
			    'county_id' => 106,
			    'name' => 'شهرري',
			    'en_name' => 'Shahr-e-Rey',
			    'latitude' => '35.5725813',
			    'longitude' => '51.4233648',
		    ],
		    [
			    'id' => 341,
			    'province_id' => 8,
			    'county_id' => 106,
			    'name' => 'کهريزک',
			    'en_name' => 'Kahrizak',
			    'latitude' => '35.5168394',
			    'longitude' => '51.3507842',
		    ],
		    [
			    'id' => 342,
			    'province_id' => 8,
			    'county_id' => 107,
			    'name' => 'تجريش',
			    'en_name' => 'Tajrish',
			    'latitude' => '35.8046493',
			    'longitude' => '51.4313206',
		    ],
		    [
			    'id' => 343,
			    'province_id' => 8,
			    'county_id' => 107,
			    'name' => 'شمشک',
			    'en_name' => 'Shemshak',
			    'latitude' => '36.0112867',
			    'longitude' => '51.486547',
		    ],
		    [
			    'id' => 344,
			    'province_id' => 8,
			    'county_id' => 107,
			    'name' => 'فشم',
			    'en_name' => 'Fasham',
			    'latitude' => '35.9317215',
			    'longitude' => '51.511309',
		    ],
		    [
			    'id' => 345,
			    'province_id' => 8,
			    'county_id' => 107,
			    'name' => 'لواسان',
			    'en_name' => 'Lavasan',
			    'latitude' => '35.8232502',
			    'longitude' => '51.60526',
		    ],
		    [
			    'id' => 346,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'انديشه',
			    'en_name' => 'Andisheh',
			    'latitude' => '35.7468945',
			    'longitude' => '51.2690735',
		    ],
		    [
			    'id' => 347,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'باغستان',
			    'en_name' => 'Baghestan',
			    'latitude' => '35.6424709',
			    'longitude' => '51.0802008',
		    ],
		    [
			    'id' => 348,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'شاهدشهر',
			    'en_name' => 'Shahedshahr',
			    'latitude' => '35.5726924',
			    'longitude' => '51.0788298',
		    ],
		    [
			    'id' => 349,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'شهريار',
			    'en_name' => 'Shahriar',
			    'latitude' => '35.6591813',
			    'longitude' => '51.0068091',
		    ],
		    [
			    'id' => 350,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'صباشهر',
			    'en_name' => 'Sabashahr',
			    'latitude' => '35.5832376',
			    'longitude' => '51.0814684',
		    ],
		    [
			    'id' => 351,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'فردوسيه',
			    'en_name' => 'Ferdosiye',
			    'latitude' => '35.5972932',
			    'longitude' => '51.0240263',
		    ],
		    [
			    'id' => 352,
			    'province_id' => 8,
			    'county_id' => 108,
			    'name' => 'وحيديه',
			    'en_name' => 'Vahidieh',
			    'latitude' => '35.6048346',
			    'longitude' => '51.0162591',
		    ],
		    [
			    'id' => 353,
			    'province_id' => 8,
			    'county_id' => 109,
			    'name' => 'ارجمند',
			    'en_name' => 'Arjmand',
			    'latitude' => '35.8140017',
			    'longitude' => '52.5035333',
		    ],
		    [
			    'id' => 354,
			    'province_id' => 8,
			    'county_id' => 109,
			    'name' => 'فيروزکوه',
			    'en_name' => 'Firuzkuh',
			    'latitude' => '35.7570281',
			    'longitude' => '52.7556218',
		    ],
		    [
			    'id' => 355,
			    'province_id' => 8,
			    'county_id' => 110,
			    'name' => 'قدس',
			    'en_name' => 'Qods',
			    'latitude' => '35.7106874',
			    'longitude' => '51.0791081',
		    ],
		    [
			    'id' => 356,
			    'province_id' => 8,
			    'county_id' => 111,
			    'name' => 'قرچک',
			    'en_name' => 'Qarchak',
			    'latitude' => '35.437052',
			    'longitude' => '51.5580653',
		    ],
		    [
			    'id' => 357,
			    'province_id' => 8,
			    'county_id' => 112,
			    'name' => 'صفادشت',
			    'en_name' => 'Safadasht',
			    'latitude' => '35.684489',
			    'longitude' => '50.824658',
		    ],
		    [
			    'id' => 358,
			    'province_id' => 8,
			    'county_id' => 112,
			    'name' => 'ملارد',
			    'en_name' => 'Malard',
			    'latitude' => '35.6794086',
			    'longitude' => '50.9456843',
		    ],
		    [
			    'id' => 359,
			    'province_id' => 8,
			    'county_id' => 113,
			    'name' => 'جوادآباد',
			    'en_name' => 'Javadabad',
			    'latitude' => '35.2102001',
			    'longitude' => '51.6727752',
		    ],
		    [
			    'id' => 360,
			    'province_id' => 8,
			    'county_id' => 113,
			    'name' => 'ورامين',
			    'en_name' => 'Varamin',
			    'latitude' => '35.3448727',
			    'longitude' => '51.6078465',
		    ],
            [
                'id' => 807,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'جعفریه',
                'en_name' => 'Jafarie',
                'latitude' => '34.7745074',
                'longitude' => '50.5065106',
            ],
            [
                'id' => 808,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'دستجرد',
                'en_name' => 'Dastjerd',
                'latitude' => '34.5538073',
                'longitude' => '50.2390622',
            ],
            [
                'id' => 809,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'سلفچگان',
                'en_name' => 'Salafchegan',
                'latitude' => '34.476606',
                'longitude' => '50.4550123',
            ],
            [
                'id' => 810,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'قم',
                'en_name' => 'Qom',
                'latitude' => '34.6887845',
                'longitude' => '50.7119792',
            ],
            [
                'id' => 811,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'قنوات',
                'en_name' => 'Qanavat',
                'latitude' => '34.6123358',
                'longitude' => '51.0136627',
            ],
            [
                'id' => 812,
                'province_id' => 19,
                'county_id' => 267,
                'name' => 'کهک',
                'en_name' => 'Kahak',
                'latitude' => '34.3919658',
                'longitude' => '50.8546399',
            ],
		    [
			    'id' => 238,
			    'province_id' => 5,
			    'county_id' => 73,
			    'name' => 'اشتهارد',
			    'en_name' => 'Eshtehard',
			    'latitude' => '35.7212279',
			    'longitude' => '50.3482495',
		    ],
		    [
			    'id' => 239,
			    'province_id' => 5,
			    'county_id' => 73,
			    'name' => 'چهارباغ',
			    'en_name' => 'Charbagh',
			    'latitude' => '35.8406028',
			    'longitude' => '50.839448',
		    ],
		    [
			    'id' => 240,
			    'province_id' => 5,
			    'county_id' => 73,
			    'name' => 'شهرجدیدهشتگرد',
			    'en_name' => 'Hashtgerd New City',
			    'latitude' => '35.9832727',
			    'longitude' => '50.6852096',
		    ],
		    [
			    'id' => 241,
			    'province_id' => 5,
			    'county_id' => 73,
			    'name' => 'کوهسار',
			    'en_name' => 'Koohsar',
			    'latitude' => '35.9624264',
			    'longitude' => '50.7757828',
		    ],
		    [
			    'id' => 242,
			    'province_id' => 5,
			    'county_id' => 73,
			    'name' => 'هشتگرد',
			    'en_name' => 'Hashtgerd',
			    'latitude' => '35.961944',
			    'longitude' => '50.68',
		    ],
		    [
			    'id' => 243,
			    'province_id' => 5,
			    'county_id' => 74,
			    'name' => 'طالقان',
			    'en_name' => 'Taleqan',
			    'latitude' => '36.2142469',
			    'longitude' => '50.5065164',
		    ],
		    [
			    'id' => 245,
			    'province_id' => 5,
			    'county_id' => 75,
			    'name' => 'فردیس',
			    'en_name' => 'Fardis',
			    'latitude' => '35.724722',
			    'longitude' => '50.988333',
		    ],
		    [
			    'id' => 246,
			    'province_id' => 5,
			    'county_id' => 75,
			    'name' => 'مشکین دشت',
			    'en_name' => 'Fardis',
			    'latitude' => '35.724722',
			    'longitude' => '50.988333',
		    ],
		    [
			    'id' => 247,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'آسارا',
			    'en_name' => 'Asara',
			    'latitude' => '36.0391312',
			    'longitude' => ',51.1908709',
		    ],
		    [
			    'id' => 248,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'کرج',
			    'en_name' => 'Karaj',
			    'latitude' => '35.8109689',
			    'longitude' => '50.877297',
		    ],
		    [
			    'id' => 249,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'کمال شهر',
			    'en_name' => 'Kamalshahr',
			    'latitude' => '35.8823936',
			    'longitude' => '50.8434385',
		    ],
		    [
			    'id' => 250,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'گرمدره',
			    'en_name' => 'Garmdareh',
			    'latitude' => '35.7537176',
			    'longitude' => '51.0470722',
		    ],
		    [
			    'id' => 251,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'ماهدشت',
			    'en_name' => 'Mahdasht',
			    'latitude' => '35.720408',
			    'longitude' => '50.7663625',
		    ],
		    [
			    'id' => 252,
			    'province_id' => 5,
			    'county_id' => 76,
			    'name' => 'محمدشهر',
			    'en_name' => 'Mohammad Shahr',
			    'latitude' => '35.7446897',
			    'longitude' => '50.8722777',
		    ],
		    [
			    'id' => 253,
			    'province_id' => 5,
			    'county_id' => 77,
			    'name' => 'تنکمان',
			    'en_name' => 'Tankaman',
			    'latitude' => '35.8915441',
			    'longitude' => '50.6059134',
		    ],
		    [
			    'id' => 254,
			    'province_id' => 5,
			    'county_id' => 77,
			    'name' => 'نظرآباد',
			    'en_name' => 'Nazarabad',
			    'latitude' => '35.9676779',
			    'longitude' => '50.5694241',
		    ],
		    [
			    'id' => 255,
			    'province_id' => 6,
			    'county_id' => 78,
			    'name' => 'آبدانان',
			    'en_name' => 'Abdanan',
			    'latitude' => '32.9935445',
			    'longitude' => '47.4037312',
		    ],
		    [
			    'id' => 256,
			    'province_id' => 6,
			    'county_id' => 78,
			    'name' => 'سراب باغ',
			    'en_name' => 'Sarabbagh',
			    'latitude' => '32.8985604',
			    'longitude' => '47.5703287',
		    ],
		    [
			    'id' => 257,
			    'province_id' => 6,
			    'county_id' => 78,
			    'name' => 'مورموری',
			    'en_name' => 'Murmuri ',
			    'latitude' => '32.7254681',
			    'longitude' => '47.6674461',
		    ],
		    [
			    'id' => 258,
			    'province_id' => 6,
			    'county_id' => 79,
			    'name' => 'ایلام',
			    'en_name' => 'Ilam',
			    'latitude' => '33.6369193',
			    'longitude' => '46.396498',
		    ],
		    [
			    'id' => 259,
			    'province_id' => 6,
			    'county_id' => 79,
			    'name' => 'چوار',
			    'en_name' => 'Chovar',
			    'latitude' => '33.6952265',
			    'longitude' => '46.2929963',
		    ],
		    [
			    'id' => 260,
			    'province_id' => 6,
			    'county_id' => 80,
			    'name' => 'ایوان',
			    'en_name' => 'Eyvan',
			    'latitude' => '33.8282489',
			    'longitude' => '46.290314',
		    ],
		    [
			    'id' => 261,
			    'province_id' => 6,
			    'county_id' => 80,
			    'name' => 'زرنه',
			    'en_name' => 'Zarneh',
			    'latitude' => '33.9286369',
			    'longitude' => '46.1787556',
		    ],
		    [
			    'id' => 262,
			    'province_id' => 6,
			    'county_id' => 81,
			    'name' => 'بدره',
			    'en_name' => 'Bedreh',
			    'latitude' => '33.3066261',
			    'longitude' => '47.0296812',
		    ],
		    [
			    'id' => 263,
			    'province_id' => 6,
			    'county_id' => 82,
			    'name' => 'آسمان آباد',
			    'en_name' => 'Aseman Abad',
			    'latitude' => '33.8518245',
			    'longitude' => '46.4440006',
		    ],
		    [
			    'id' => 264,
			    'province_id' => 6,
			    'county_id' => 82,
			    'name' => 'بلاوه',
			    'en_name' => 'Balavah Tareh',
			    'latitude' => '33.6669007',
			    'longitude' => '46.802435',
		    ],
		    [
			    'id' => 265,
			    'province_id' => 6,
			    'county_id' => 82,
			    'name' => 'توحید',
			    'en_name' => 'Tohid',
			    'latitude' => '33.7255',
			    'longitude' => '47.0685',
		    ],
		    [
			    'id' => 266,
			    'province_id' => 6,
			    'county_id' => 82,
			    'name' => 'سرابله',
			    'en_name' => 'Sarableh',
			    'latitude' => '33.7657773',
			    'longitude' => '46.5464358',
		    ],
		    [
			    'id' => 267,
			    'province_id' => 6,
			    'county_id' => 82,
			    'name' => 'شباب',
			    'en_name' => 'Shabab',
			    'latitude' => '33.748786',
			    'longitude' => '46.6322851',
		    ],
		    [
			    'id' => 268,
			    'province_id' => 6,
			    'county_id' => 83,
			    'name' => 'دره شهر',
			    'en_name' => 'Darreh Shahr',
			    'latitude' => '33.1432967',
			    'longitude' => '47.3680686',
		    ],
		    [
			    'id' => 269,
			    'province_id' => 6,
			    'county_id' => 83,
			    'name' => 'ماژین',
			    'en_name' => 'Mazhin',
			    'latitude' => '32.9529715',
			    'longitude' => '47.7809572',
		    ],
		    [
			    'id' => 270,
			    'province_id' => 6,
			    'county_id' => 84,
			    'name' => 'پهله',
			    'en_name' => 'Pahleh',
			    'latitude' => '33.0105976',
			    'longitude' => '46.8792736',
		    ],
		    [
			    'id' => 271,
			    'province_id' => 6,
			    'county_id' => 84,
			    'name' => 'دهلران',
			    'en_name' => 'Dehloran',
			    'latitude' => '32.6910709',
			    'longitude' => '47.2526263',
		    ],
		    [
			    'id' => 272,
			    'province_id' => 6,
			    'county_id' => 84,
			    'name' => 'موسیان',
			    'en_name' => 'Mousiyan',
			    'latitude' => '32.5186816',
			    'longitude' => '47.3681008',
		    ],
		    [
			    'id' => 273,
			    'province_id' => 6,
			    'county_id' => 84,
			    'name' => 'میمه',
			    'en_name' => 'Maymeh',
			    'latitude' => '33.2278825',
			    'longitude' => '46.9129192',
		    ],
		    [
			    'id' => 274,
			    'province_id' => 6,
			    'county_id' => 85,
			    'name' => 'لومار',
			    'en_name' => 'Loumar',
			    'latitude' => '33.5678776',
			    'longitude' => '46.8051374',
		    ],
		    [
			    'id' => 275,
			    'province_id' => 6,
			    'county_id' => 86,
			    'name' => 'ارکواز',
			    'en_name' => 'Arkavaz',
			    'latitude' => '33.3854405',
			    'longitude' => '46.5757868',
		    ],
		    [
			    'id' => 276,
			    'province_id' => 6,
			    'county_id' => 86,
			    'name' => 'دلگشا',
			    'en_name' => 'Delgosha',
			    'latitude' => '33.4063312',
			    'longitude' => '46.589756',
		    ],
		    [
			    'id' => 277,
			    'province_id' => 6,
			    'county_id' => 86,
			    'name' => 'مهر',
			    'en_name' => 'Mehr',
			    'latitude' => '33.436944',
			    'longitude' => '46.461111',
		    ],
		    [
			    'id' => 278,
			    'province_id' => 6,
			    'county_id' => 87,
			    'name' => 'صالح آباد',
			    'en_name' => 'Saleh Abad',
			    'latitude' => '33.4715794',
			    'longitude' => '46.1818457',
		    ],
		    [
			    'id' => 279,
			    'province_id' => 6,
			    'county_id' => 87,
			    'name' => 'مهران',
			    'en_name' => 'Mehran',
			    'latitude' => '33.1216733',
			    'longitude' => '46.156268',
		    ],
	    ]);
    }
}
