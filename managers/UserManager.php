<?php

class UserManager extends AbstractManager{

    public function __construct(){
        parent::__construct();
    }

    public function findAll(): array{
        $users = $this->db->query('SELECT * FROM users');
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($users as $data){
            $user = new User();
            $user->setId($data['id']);
            $user->setEmail($data['email']);
            $user->setFirstname($data['first_name']);
            $user->setLastname($data['last_name']);
            $users[] = $user;
        }
        return $users;
    }

    public function findOne(int $id){
        $query = $this->db->prepare('SELECT * FROM users Where id = :id');
        
        $parameters = ['id' => $id];
        
        $query->execute($parameters);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if($data){ 
            $userOne = new User();
            $userOne->setId($data['id']);
            $userOne->setEmail($data['email']);
            $userOne->setFirstname($data['first_name']);
            $userOne->setLastname($data['last_name']);
            return $userOne;
        }
        return null;
    }

    public function create(CreateUser $user): void{
        $query = $this->db->prepare('
            INSERT INTO users (email, first_name, last_name)
            VALUES (:email, :first_name, :last_name)
        ');
        
        $parameters = [
            'email' => $_GET['email'],
            'first_name' => $_GET['first_name'],
            'last_name' => $_GET['last_name']
        ];
        
        $query->execute($parameters);
    }

    public function update(UpdateUser $user): void{
        $query = $this->db->prepare('
            UPDATE users SET email = :email, first_name = :first_name, last_name = :last_name
            WHERE id = :id
        ');
        
        $parameters = [
            'id' => $_GET['id'],
            'email' => $_GET['email'],
            'first_name' => $_GET['first_name'],
            'last_name' => $_GET['last_name']
        ];
        
        $query->execute($parameters);
    }

    public function delete(int $id): void{
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
    }
}

?>