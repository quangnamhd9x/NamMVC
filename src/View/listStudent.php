<button><a href="index.php?page=addStudent">ADD</a></button>
<table>
    <tbody>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Avatar</th>
        <th>Action</th>
    </tr>
    <?php foreach ($students as $key => $student) : ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $student->getStudentName(); ?></td>
            <td><?php echo $student->getBirthday(); ?></td>
            <td><img style="width: 50px" src="<?php echo $student->getImage(); ?>"></td>
            <td>
                <button><a class="btn btn-succses"
                           href="index.php?page=edit&id=<?php echo $student->getStudentId(); ?>">Edit</a></button>
                <button><a onclick="return confirm('Are you sure?') " class="btn btn-danger"
                           href="index.php?page=delete&id=<?php echo $student->getStudentId(); ?>">Delete</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>