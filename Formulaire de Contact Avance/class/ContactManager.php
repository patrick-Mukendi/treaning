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
    private FileHandler $fileHandler;

    public function __construct()
    {
        $this->fileHandler = new FileHandler();
    }

    public function readAllData(): array|bool
    {
        return $this->fileHandler->getRows();
    }

    public function readSingleData(): array|bool
    {
        $contact = new Contact();

        return $this->fileHandler->getSingle($contact->getId());
    }

    public function addData(string $name, string $email, string $phone): bool|int
    {
        $contact = new Contact(0, $name, $email, $phone);
        $contacts = [
            'name' => $contact->getName(),
            'email' => $contact->getEmail(),
            'phone' => $contact->getPhone(),
        ];

        return $this->fileHandler->insert($contacts);
    }

    public function updateDate(int $id_str, string $name, string $email, string $phone): bool
    {
        $contact = new Contact($id_str, $name, $email, $phone);

        $contacts = [
            'name' => $contact->getName(),
            'email' => $contact->getEmail(),
            'phone' => $contact->getPhone(),
        ];

        return $this->fileHandler->update($contacts, $id_str);
    }

    public function delete(int $id): mixed
    {
        return $this->fileHandler->delete($id);
    }
}
