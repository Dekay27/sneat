<form method="get" action="search.php">
    <input type="text" name="query" placeholder="Search...">
    <select name="category">
        <option value="all">All Countries</option>
        <?php
        // Connect to the database
        $db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

        // Query the database for categories
        $result = $db->query('SELECT * FROM country');

        // Fetch the data as an associative array
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);

        // Output the options for the dropdown list
        foreach ($categories as $category) {
            echo '<option value="' . $category['CountryID'] . '">' . $category['CountryDescription'] . '</option>';
        }
        ?>
    </select>
    <button type="submit">Search</button>
</form>

<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

// Get the item ID from the query string
$itemId = $_GET['itemId'];

// Query the database for the item data
$result = $db->query("SELECT * FROM country WHERE CountryID = $itemId");
$item = $result->fetch();
?>

<!-- Modal trigger button -->
<button type="button" data-toggle="modal" data-target="#editModal">Edit</button>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal form -->
                <
