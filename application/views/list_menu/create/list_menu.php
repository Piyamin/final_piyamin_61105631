<div class="container">

    <h2>สร้างสินค้า</h2>
    <hr>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url('list_menu/save'); ?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>ชื่อสินค้า</label><span class="text-denger">*</span>
                            <input type="text" class="form-control" name="name" placeholder="ชื่อสินค้า" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ราคา/ชิ้น</label><span class="text-denger">*</span>
                            <input type="number" class="form-control" name="price" placeholder="ราคา/ชิ้น" min="0" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" required>
                            <label>หมวดหมู่</label><span class="text-denger">*</span>
                            <select class="form-control" name="menu">
                                <option value="">เลือกหมวดหมู่</option>
                                <?php foreach ($menu as $key => $row) { ?>
                                    <option value="<?php echo $row['_id'] ?>"><?php echo $row['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <p class="text-center"><button type="submit" class="btn btn-outline-success"><i class="far fa-save"></i> บันทึก</button></p>
            </form>
        </div>
    </div>

</div>
</div>
</div>
</section>
<!-- food_menu part end-->