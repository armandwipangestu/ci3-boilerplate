<?= $this->session->flashdata('message') ?>
<?= form_error('role', '<div class="alert alert-danger neu-brutalism mb-4">', '</div>') ?>

<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5 class="card-title">List User Data</h5>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modallAddNewRole">Add New Role</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-lg" id="table1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Avatar Image</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><img src="<?= base_url(); ?>assets/img/avatar_image/<?= $user['avatar_image'] ?>" alt="Avatar Image" class="rounded-circle mr-1" style="width: 30px;"></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td><?= $user['role']; ?></td>
                                <td><?= $user['first_name']; ?></td>
                                <td><?= $user['last_name']; ?></td>
                                <td><?= $user['gender']; ?></td>
                                <td><?= $user['address']; ?></td>
                                <td><?= $user['phone_number']; ?></td>
                                <td><?= (new DateTime($user['created_at']))->format('l, j F Y H:m:s'); ?></td>
                                <td><?= (new DateTime($user['updated_at']))->format('l, j F Y H:m:s'); ?></td>
                                <td>
                                    <a onclick="changeRole('<?= $user['id']; ?>')" class="cursor-pointer">
                                        <span class="badge bg-warning">Edit</span>
                                    </a>
                                    <a class="cursor-pointer delete-menu" onclick="deleteRole(this)" data-id="<?= $user['id']; ?>" data-role="<?= $user['role']; ?>">
                                        <span class="badge bg-danger">Delete</span>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal Add New Role -->
<div class="modal fade" id="modallAddNewRole" tabindex="-1" role="dialog" aria-labelledby="modallAddNewRoleTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modallAddNewRoleTitle">Add New Role</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="POST">
                <div class="modal-body">
                    <label for="role">Role Name</label>
                    <div class="form-group">
                        <input type="text" id="role" name="role" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <span class="d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <span class="d-sm-block">Add</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Change Menu -->
<div class="modal fade" id="modalChangeRole" tabindex="-1" role="dialog" aria-labelledby="modalChangeRoleTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalChangeRoleTitle">Change Role</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= base_url('admin/change_role_by_id'); ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="changeId" name="id" class="form-control">

                    <label for="changeRole">Role Name</label>
                    <div class="form-group">
                        <input type="text" id="changeRole" name="role" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <span class="d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <span class="d-sm-block">Change</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const baseUrl = `<?= base_url(); ?>`

    const changeRole = (roleId) => {
        $.get(`${baseUrl}admin/get_role_by_id/${roleId}`, (data) => {
            const role = $.parseJSON(data);

            $('#changeId').val(role.id);
            $('#changeRole').val(role.role);
            $('#modalChangeRole').modal('show');
        })
    }

    const deleteRole = (data) => {
        const id = $(data).data('id');
        const role = $(data).data('role');

        Swal.fire({
            icon: 'warning',
            html: `Are you sure want to delete this role "<b>${role}</b>"?`,
            showCancelButton: true,
            confirmButtonColor: '#d9534f',
            cancelButtonColor: '#5cb85c',
            confirmButtonText: `Yes`,
            cancelButtonText: `No`,
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `${baseUrl}admin/delete_role_by_id/${id}`
            }
        })
    }
</script>