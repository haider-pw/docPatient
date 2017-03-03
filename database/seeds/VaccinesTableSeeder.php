<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove Existing Records if Any.
        //DB::table('vaccines')->delete();
        DB::table('vaccines')->truncate();



        //Array to Populate in Table
        $vaccines = [
            [
                'name' => 'BCG',
                'description' => 'BCG, or bacille Calmette-Guerin, is a vaccine for tuberculosis (TB) disease',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Hepatitis B',
                'description' => 'Hepatitis B is a serious disease caused by a virus that attacks the liver. The virus, which is called hepatitis B virus (HBV), can cause lifelong infection, cirrhosis (scarring) of the liver, liver cancer, liver failure, and death.',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Polio',
                'description' => 'There are two types of vaccine that protect against polio: inactivated poliovirus vaccine (IPV) and oral poliovirus vaccine (OPV). IPV is given as an injection in the leg or arm, depending on the patient\'s age',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Phneumococal',
                'description' => 'Pneumococcal conjugate vaccine is a pneumococcal vaccine and a conjugate vaccine used to protect infants, young children, and adults against disease caused by the bacterium Streptococcus pneumoniae.',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Rota Virus',
                'description' => 'Rotavirus vaccine is a vaccine used to protect against rotavirus infections. These viruses are the leading cause of severe diarrhea among young children. The vaccines prevent 15 to 34% of severe diarrhea in the developing world and 37 to 96% of severe diarrhea in the developed world.',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Measles/MMR',
                'description' => 'The MMR vaccine is an immunization vaccine against measles, mumps, and rubella (German measles).',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Influenza',
                'description' => 'These antibodies provide protection against infection with the viruses that are in the vaccine',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Varicella',
                'description' => 'The chickenpox vaccine is a shot that can protect nearly anyone who receives the vaccine from catching chickenpox',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Booster',
                'description' => 'In medicine, a booster dose is an extra administration of a vaccine after an earlier (prime) dose',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Meningococcal',
                'description' => 'Vaccines are now available that help protect against all three serogroups (B, C, and Y) of meningococcal disease',
                'created_at'=>Carbon::now()],
            [
                'name' => 'Typhoid',
                'description' => 'Typhoid vaccines are vaccines that prevent typhoid fever. There are two types that are widely available: Ty21a (a live vaccine given by mouth) and Vi capsular polysaccharide vaccine (an injectable subunit vaccine).',
                'created_at'=>Carbon::now()]
        ];

        //Finally Populate the Table using Insert Query.
        DB::table('vaccines')->insert($vaccines);
    }
}
