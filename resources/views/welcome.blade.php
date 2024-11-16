<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form Fields with Nested Sections</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <button id="addNew" class="btn btn-primary mb-3">Add New</button>
    <form id="form">
        <div class="form-group form-section">
            <label>Brand Title</label>
            <input type="text" class="form-control" name="brandTitle[]" placeholder="Enter Title Name">
            <button type="button" class="btn btn-info mt-2 add-commit">Add Commit</button>
            <button type="button" class="btn btn-danger mt-2 remove-section">Remove</button>
            
            <!-- Placeholder for Commit Subsection -->
            <div class="commit-section mt-3"></div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
        <button type="button" class="btn btn-danger mt-3">Cancel</button>
    </form>
</div>

<script>
$(document).ready(function () {
    // Function to add a new Brand Title section
    $('#addNew').click(function () {
        let newSection = $('.form-section:first').clone();
        newSection.find('input').val(''); // Clear input fields
        newSection.find('.commit-section').empty(); // Remove commit subsections
        $('#form').prepend(newSection);
    });

    // Event delegation for adding a new commit subsection
    $('#form').on('click', '.add-commit', function () {
        let commitSection = `
            <div class="card mt-2 p-3">
                <label>Comment</label>
                <input type="text" class="form-control mb-2" name="comment[]" placeholder="Comment">
                <label>Context Type</label>
                <input type="text" class="form-control mb-2" name="contextType[]" placeholder="Context Type">
                <label>Video Source Type</label>
                <input type="text" class="form-control mb-2" name="videoSourceType[]" placeholder="Video Source Type">
                <button type="button" class="btn btn-danger remove-commit mt-2">Remove Commit</button>
            </div>
        `;
        $(this).siblings('.commit-section').append(commitSection);
    });

    // Event delegation for removing a commit subsection
    $('#form').on('click', '.remove-commit', function () {
        $(this).closest('.card').remove();
    });

    // Event delegation for removing an entire Brand Title section
    $('#form').on('click', '.remove-section', function () {
        $(this).closest('.form-section').remove();
    });
});
</script>

</body>
</html>
