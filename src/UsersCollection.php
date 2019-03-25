<?php
namespace App;

//transformar el array en un objeto de una clase

class UsersCollection

{
    private $users = [];
    public function __construct(array $data =[])

    {

        foreach($data as $user) {
           
            $geo= new Geo;
            $geo->setLat ($user->address->geo->lat);
            $geo->setIng ($user->address->geo->ing);

            $address=new Address;
            $address->setStreet ($user->address->street);
            $address->setSuite ($user->address->suite);
            $address->setCity ($user->address->city);
            $address->setZipcode ($user->address->zipcode);
            $address->setGeo ($user->address->geo);

            $u= new User;
            $u->setId ($user->id);
            $u->setName ($user->name);
            $u->setUsername ($user->username);
            $u->setEmail($user->email);
            $u->setAddress($address);
            $u->setPhone ($user->phone);
            $u->setWebsite ($user->website);
            $u->setCompany ($user->company);
    
            $this->users[] = $u;
        }
        

    }
        public function get()

    {
        return $this->users;
    }

}