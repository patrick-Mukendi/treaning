<?php
/* 
 * ContactManager 
 * Cette classe fait du crud operation  (connect, insert, update, and delete)
 * @author    Patrick Mukendi
 * @url        http://github 
 */
namespace Contact\Class;

class ContactManager
{
    private   $fileHandler;
    private array $contact;
    public function __construct()
    {
        $this->fileHandler = new FileHandler();
    }

    public function readAllData()
    {
        return $this->fileHandler->getRows();;
    }

    public function readSingleData()
    {
        $contact = new Contact();
        return $this->fileHandler->getSingle($contact->getId());
    }

    public function addData($name, $email, $phone)
    {
        $contact = new Contact(null, $name, $email, $phone);
        $contacts = [
            'name' => $contact->getName(),
            'email' => $contact->getEmail(),
            'phone' => $contact->getPhone()
        ];
        return $this->fileHandler->insert($contacts);
    }

    public function updateDate($id_str, $name, $email, $phone)
    {
        $contact = new Contact($id_str, $name, $email, $phone);

        $contacts = [
            'name' => $contact->getName(),
            'email' => $contact->getEmail(),
            'phone' => $contact->getPhone()
        ];

        return $this->fileHandler->update($contacts, $id_str);
    }

    public function delete($id)
    {
        $contact = new Contact();
        return $this->fileHandler->delete($id);
    }
}
