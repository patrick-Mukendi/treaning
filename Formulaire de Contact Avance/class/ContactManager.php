<?php
/* 
 * JSON Class 
 * Cette classe fait du crud operation  (connect, insert, update, and delete)
 * @author    Patrick Mukendi
 * @url        http://github 
 */
include_once 'FileHandler.php';
include_once 'Contact.php';
class ContactManager
{ private   $fileHandler; private array $contact;
    public function __construct ()
    {
        $this->fileHandler = new FileHandler();
        
    }

    public function readAllData() {
        
        return $this->fileHandler->getRows();;
    }

    public function readSingleData ()
    {
        $contact = new Contact();
        return $this->fileHandler->getSingle($contact->getId());
    }

    public function addData ( $name,$email,$phone )
    { 
        $contact = new Contact($name,$email,$phone );

        $contacts = ['name'=>$contact->getName(), 
                     'email'=>$contact->getEmail(), 
                     'phone'=>$contact->getPhone()];

        return $this->fileHandler->insert($contacts); 
    }

    public function updateDate()
    {
        $contact = new Contact();

        $contacts = ['id'=>$contact->getId(), 
                     'name'=>$contact->getName(), 
                     'email'=>$contact->getEmail(), 
                     'phone'=>$contact->getPhone()];

        return $this->fileHandler->update($contacts, $contact->getId()); 
    }

    public function delete ($id)
    {
        $contact = new Contact();
        return $this->fileHandler->delete($id); 
    }
}
