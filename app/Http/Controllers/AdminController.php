<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function index()
   {
       return view('admin.index');
   }

   public function showUpdateProfile()
   {
       return view('admin.profile');
   }

   /**
    * POST /admin/profile
    **/
   public function updateProfile()
   {

   }

   //------------- Moderators : GET & POST $ DELETE ------------- //

   /**
    * GET /admin/moderators
    */
   public function showModerators()
   {
       return view('admin.moderator.index');
   }

   /**
    * GET /admin/moderators/new
    */
   public function showCreateModerators()
   {
       return view('admin.moderator.edit');
   }

   /**
    * GET /admin/moderators/{id}
    */
   public function showUpdateModerators()
   {
       return view('admin.moderator.edit');
   }

   /**
    * POST /admin/moderator/new
    */
   public function CreateModerator()
   {

   }

   /**
    * POST /admin/moderator/{id}
    */
   public function updateModerator()
   {

   }

   /**
    * DELETE /admin/moderator/new
    */
   public function deleteModerator()
   {

   }

   //-------------  Agencies ------------- //

   /**
   *   GET /admin/agencies
    **/
   public function showAgencies()
   {
       return view('admin.agencies.index');
   }

   /**
    *   GET /admin/agencies/new
    **/
   public function showCreateAgencies()
   {
       return view('admin.agencies.new');
   }

   /**
    *   GET /admin/agencies/{id}
    **/
   public  function showUpdateAgency()
   {
       return view('admin.agencies.edit');
   }

   /**
    *   POST /admin/agencies/{id}
    **/
   public  function updateAgency()
   {

   }
   /**
    *   POST /admin/agencies/new
    **/
   public function createAgency()
   {

   }

   /**
   *   DELETE /admin/agencies/{id}
    **/
   public function deleteAgency()
   {

   }

   //-------------  Cars ------------- //

   /**
   *   GET /admin/cars
    **/
   public function showCars()
   {
       return view('admin.cars.index');
   }

   /**
   *   GET /admin/cars/new
    **/
   public function showCreateCars()
   {
       return view('admin.cars.new');
   }

   /**
   *   GET /admin/cars/{id}
    **/
   public function showUpdateCars()
   {
       return view('admin.cars.edit');
   }

   /**
   *   POST /admin/cars/new
    **/
   public function createCar()
   {

   }

   /**
   *   POST /admin/cars/{id}
    **/
   public function updateCar()
   {

   }

   /**
   *   DELETE /admin/cars/{id}
    **/
   public function deleteCar()
   {

   }
}

