<div class="container">
    <?php if ($this->session->flashdata("success-msg")) { ?>
        <div class="alert alert-primary" role="alert">
            บันทึกสำเร็จ
        </div>
    <?php } ?>
    <form method="get">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo base_url('list_menu/create'); ?>" class="btn btn-info  btn-block"><i class="fas fa-plus"></i></i>สร้างสินค้า</a>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="ค้นหาด้วยชื่อสินค้า" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <select class="form-control" name="menu_id">
                            <option value="">เลือกหมวดหมู่</option>
                            <?php foreach ($menu as $key => $row) { ?>
                                <option value="<?php echo $row['_id'] ?>" <?php echo ($menu_id == $row['_id']) ? "selected" : ""; ?>><?php echo $row['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="search" class="btn btn-secondary  btn-block" value="search"><i class="fas fa-search"></i>ค้นหาสินค้า</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">ราคา</th>
                                <th scope="col">หมวดหมู่</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_menu as $key => $row) { ?>
                                <tr>
                                    <th scope="row"><?php echo ($key + 1) ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo getMenuNameFromId($row['menu']['$oid']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</section>
<!-- food_menu part end-->