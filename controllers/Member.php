<?php
class MembersController {
    function create($memberData) {
        $MemberModel = new Member();
        $bookModel->create($memberData);
    }

    function getAllMembers() {
        $memberModel = new Member();
        $allMembers = $memberModel->getAll();
        return $allMembers;
    }

    function deleteMember($id) {
        $memberModel = new Member();
        $memberModel->delete($id);
    }

    function updateBook($memberData) {
        $memberModel = new Book();
        $memberModel->update($memberData);
    }
}

$memberController = new MemberController();

if(isset($_GET["createMember"])) {
    $memberData = array();

    //insert member data into array from view

    $memberController->create($memberData);
}

$memberData;
if(isset($_GET["getMembers"])) {
    $memberData = $memberController->getAllBooks();
}

if(isset($_GET["deleteMember"])) {
    $memberId = $_GET["memberId"];
    $memberController->deleteMember($memberId);
}

if(isset($_GET["updateMember"])) {
    $memberData = array();

    //member information from view into array

    $memberController->updateMember($memberData);
}
?>