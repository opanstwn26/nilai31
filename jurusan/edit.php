<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">edit Jurusan</div>
                <div class="col-4">
                    <a href="?m=Jurusan&s=add" class="btn btn-lg btn-primary float-end">kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM majors WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query);
            ?>
            <div class="card-body">
                <form action="?m=jurusan&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" value="<?=$r['name']?>" class="form-control" placeholder="Nama Jurusan" required
                            autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="capacity" value="<?=$r['capacity']?>" class="form-control" placeholder="kapasitas" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="fill" value="<?=$r['fill']?>" class="form-control" placeholder="Terisi">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$r['id']?>">
                        <input type="reset" class="btn btn-warning">&nbsp;
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>