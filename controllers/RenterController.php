<?php

namespace App\Controllers;

use App\Models\Renter;
use App\Models\Location;
use App\Providers\View;
use App\Providers\Validator;

class RenterController
{

    public function index()
    {
        $renter = new Renter;

        $renters = $renter->select('name');
        if ($renters) {
            return View::render('renter/index', ['renters' => $renters]);
        } else {
            echo "error";
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $renter = new Renter;
            $selectId = $renter->selectId($data['id']);
            if ($selectId) {
                return View::render('renter/show', ['renter' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'Could not find this renter']);
            }
        }
        return View::render('error');
    }

    public function create()
    {
        if (!isset($_SESSION['privilege_id']) || $_SESSION['privilege_id'] != 1) {
            header("Location: " .BASE. "/renters");
            exit;
        }
        $location = new Location;
        $locations = $location->select();
        return View::render('renter/create', ['locations' => $locations]);
    }

    public function store($data)
    {
        $validator = new Validator;
        $validator->field('name', $data['name'])->min(2)->max(10);
        $validator->field('address', $data['address'])->required();
        $validator->field('city', $data['city'])->required();
        $validator->field('zipcode', $data['zipcode'], 'zipcode')->required();
        $validator->field('locationtypeid', $data['locationtypeid'], 'Location')->required()->number();

        if ($validator->isSuccess()) {
            $renter = new Renter;
            $insert = $renter->insert($data);

            if ($insert) {
                return View::redirect('renters');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            $location = new Location;
            $locations = $location->select();

            return View::render('renter/create', ['errors' => $errors, 'inputs' => $data, 'locations' => $locations]);
        }
    }
    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {

            $renter = new Renter;
            $selectId = $renter->selectId($data['id']);
            if ($selectId) {
                $location = new Location;
                $locations = $location->select();
                return View::render('renter/edit', ['locations' => $locations, 'inputs'=>$selectId]);
            }
        }
        return View::render('error');
    }

    public function update($data = [], $get = [])
    {
        if (isset($get['id']) && $get['id'] != null) {
            $validator = new Validator;
            $validator->field('name', $data['name'])->min(2)->max(10);
            $validator->field('address', $data['address'])->required();
            $validator->field('city', $data['city'])->required();
            $validator->field('zipcode', $data['zipcode'], 'zipcode')->required();
            $validator->field('locationtypeid', $data['locationtypeid'], 'Location')->required()->number();

            if ($validator->isSuccess()) {
                $renter = new Renter;
                $insert = $renter->insert($data);

                if ($insert) {
                    return View::redirect('renters');
                } else {
                    return View::render('error');
                }
            } else {
                $errors = $validator->getErrors();
                $location = new Location;
                $locations = $location->select('typename');

                return View::render('renter/create', ['errors' => $errors, 'inputs' => $data, 'locations' => $locations]);
            }
        }
        return View::render('error');
    }

    public function delete($data)
    {
        $renter = new Renter;
        $delete = $renter->delete($data['id']);
        if ($delete) {
            return View::redirect('renters');
        }
        return View::render('error');
    }
}
