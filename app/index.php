<?php include_once 'header.php'?>
<div class="card mt-3">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5>All Student List</h5>
        <a href="#" class="btn btn-dark">Add New</a>
    </div>
    <div class="card-body border-0">
        <table class="table border border-white">
            <thead>
            <th>SL.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
            </thead>
            <tbody>
            <tr class="">
                <td>1</td>
                <td>Samiul</td>
                <td>samiul@gmail.com</td>
                <td>123456789</td>
                <td>
                    <a href="#" class="btn btn-sm btn-outline-dark">Edit</a>
                    <a href="#" class="btn btn-sm btn-dark">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php include_once 'footer.php'?>