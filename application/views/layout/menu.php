<!-- food_menu start-->
<section class="food_menu gray_bg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <p>Popular Menu</p>
                    <h2>Delicious Food Menu</h2>
                    <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
                        <input class="form-control form-control ml-3 w-75" type="text" name="name"  placeholder="Search"  aria-label="Search">
                        <button type="submit" name="search" value="search" class="btn btn-outline-warning"><i class="fas fa-search" aria-hidden="true" ml-4 ></i></button>
                    </form>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="nav nav-tabs food_menu_nav" role="tablist">
                    <?php foreach ($menu as $row) { ?>
                        <a id="<?php echo $row['name'] ?>-tab" href="<?php echo base_url('menu/' . $row['_id']) ?>"><?php echo $row['name'] ?></a>
                    <?php } ?>
                </div>
            </div>