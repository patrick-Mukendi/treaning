//Exemple github aide

<?php
class FileHandler {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function readData() {
        if (file_exists($this->filename)) {
            $data = file_get_contents($this->filename);
            return unserialize($data);
        } else {
            return [];
        }
    }

    public function writeData($data) {
        $serialized_data = serialize($data);
        file_put_contents($this->filename, $serialized_data);
    }
}
?>


<?php
class Contact {
    private $name;
    private $phoneNumber;
    private $email;

    public function __construct($name, $phoneNumber, $email) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>


<?php
class ContactManager {
    private $fileHandler;
    private $contacts;

    public function __construct($filename) {
        $this->fileHandler = new FileHandler($filename);
        $this->contacts = $this->fileHandler->readData();
    }

    public function addContact($name, $phoneNumber, $email) {
        $contact = new Contact($name, $phoneNumber, $email);
        $this->contacts[] = $contact;
        $this->fileHandler->writeData($this->contacts);
    }

    public function deleteContact($name) {
        foreach ($this->contacts as $key => $contact) {
            if ($contact->getName() === $name) {
                unset($this->contacts[$key]);
                $this->fileHandler->writeData($this->contacts);
                return true;
            }
        }
        return false; // Contact not found
    }

    public function retrieveContacts() {
        return $this->contacts;
    }
}
?>


<?php
// Exemple d'utilisation

// Création d'un gestionnaire de contacts avec un fichier de données
$contactManager = new ContactManager('contacts.dat');

// Ajout de contacts
$contactManager->addContact('John Doe', '123-456-7890', 'john.doe@example.com');
$contactManager->addContact('Jane Smith', '456-789-0123', 'jane.smith@example.com');

// Suppression d'un contact
$contactManager->deleteContact('John Doe');

// Récupération des contacts
$contacts = $contactManager->retrieveContacts();

// Affichage des contacts
foreach ($contacts as $contact) {
    echo "Nom: " . $contact->getName() . ", Téléphone: " . $contact->getPhoneNumber() . ", Email: " . $contact->getEmail() . "<br>";
}
?>

