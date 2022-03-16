<?php
require_once('header.php');
require_once('check_log.php');
$succ = '';
$err = '';
if (isset($_POST['form-item-add'])) {
    $price = $_POST['item-price'];
    $name = $_POST['item-name'];

    if (!isset($_POST['item-name'])) {
        $err = 'Please enter an item name!';
        if (!isset($_POST['item-price']))
            $err = 'Please enter an item name and its price.';
    } else if (!isset($_POST['item-price'])) {
        $err = "Please enter the item price!";
    } else {
        $valid = 1;
        $q = $pdo->prepare("SELECT count(iname) FROM item WHERE iname = ?");
        $q->execute([$name]);
        $res = $q->fetchAll();
        foreach ($res as $row) {
            if ($row['count(iname)'] > 0) {
                $valid = 0;
                $err = 'Item is already listed!' . '<br>';
                break;
            }
        }
        if ($valid == 1) {
            $q = $pdo->prepare("INSERT INTO item (
                        iname,
                        iprice
                    ) 
                    VALUES (?,?)");
            $q->execute([
                $name,
                $price
            ]);

            $succ = 'Registered successfully!';
        }
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NAME</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $q = $pdo->prepare("SELECT * FROM item ORDER BY iid ASC");
                    $q->execute();
                    $res = $q->fetchAll();
                    foreach ($res as $row) {
                        $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td><?php echo $row['iname']; ?></td>
                        <td><?php echo $row['iprice']; ?></td>
                        <td>

                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-edit">Edit</button>
                            <!-- <a href="item-delete.php" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete">Delete</a> -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-delete">Delete</button>
                            <div class="modal" id="modal-edit">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="items.php" method="POST">
                                            <div class=" modal-body">
                                                <!-- <div class="mb-3"> -->
                                                <div>
                                                    <label class="form-label">Item Name</label>
                                                    <input type="text" class="form-control" id="edit-item-name"
                                                        placeholder="<?php echo $row['iname'] ?>">
                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <div>
                                                    <label class="form-label">Price</label>
                                                    <input type="text" class="form-control" id="edit-item-price"
                                                        placeholder="<?php echo $row['iname'] ?>">
                                                </div>

                                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" id="modal-delete" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                        <!-- <td>
                        <a href="category_edit.php?id=</?php echo $row['category_id']; ?>"
                            class="btn btn-xs btn-warning">Edit</a>
                        <a href="category_delete.php?id=</?php echo $row['category_id']; ?>"
                            class="btn btn-xs btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                    </td> -->
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <div class="d-flex">
                <form action="items.php" method="POST">
                    <?php
                    if ($succ) {
                        echo '<div class="alert alert-success" role="alert">' . $succ . '</div>';
                    } else if ($err) {
                        echo '<div class="alert alert-danger" role="alert">' . $err . '</div>';
                    }
                    $err = '';
                    $succ = '';
                    ?>
                    <h2>Add Items</h2>
                    <input type="text" placeholder="Enter Item Name" class="form-control mb-3" name="item-name"
                        required>
                    <input type="text" placeholder="Enter Item Price" class="form-control mb-3" name="item-price"
                        required>
                    <button type="submit" name="form-item-add" class="btn btn-primary w-100">Add Item</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>