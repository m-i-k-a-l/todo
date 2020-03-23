<h3><?= $title ?></h3>
<form action="/login/check">
    <div class="col-12">
    <?= \Config\Services::validation()->listErrors(); ?>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input
        class="form-control"
        name="user"
        placeholder="Enter username"
        maxlength="30">
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input
        class="form-control"
        name="first"
        type="text"
        placeholder="Enter first name"
        maxlength="30">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input
        class="form-control"
        name="last"
        type="text"
        placeholder="Enter last name"
        maxlength="30">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input
        class="form-control"
        name="password"
        type="password"
        placeholder="Enter password"
        maxlength="30">
    </div>
    <div class="form-group">
        <label>Password again</label>
        <input
        class="form-control"
        name="password"
        type="password"
        placeholder="Enter password again"
        maxlength="30">
    </div>
    <button class="btn btn-primary">Login</button>
    <?= anchor('login/register','Register') ?>
</form>