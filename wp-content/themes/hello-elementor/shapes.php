<style>
.hero-section::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 500px;
    height: 167px;
    background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Group-111-1.png') no-repeat;
    background-size: cover;
    z-index: 0;
}

@media screen and (max-width: 578px) {
    .hero-section::after {
        width: 220px;
        height: 100px;
        left: 1rem;
        background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Rectangle-57.png') no-repeat;
        background-size: cover;
    }
}

@media screen and (max-width: 578px) {
    .elementor-accordion .elementor-tab-title {
        padding: 1.5rem 2rem 1.5rem 2rem !important;
    }
    #rave-mobile h2 {
        color: #4FDCCE;
    }

    #ellips-speakers {
        position: relative;
    }

    #ellips-speakers::after {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 70px;
        height: 120px;
        background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Ellipse-3.png') no-repeat;
        background-size: cover;
        z-index: 1;
    }
}

#agenda-ellipse::after {
    content: "";
    position: absolute;
    left: 10rem;
    width: 250px;
    height: 112px;
    background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Ellipse-3-1.png') no-repeat;
    background-size: cover;
    z-index: 1;
}

#speakers-ellips::after {
    content: "";
    position: absolute;
    right: 6rem;
    top: 1rem;
    width: 177px;
    height: 177px;
    background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Ellipse-3-2.png') no-repeat;
    background-size: cover;
    z-index: 1;
}

#meet-ellipse::before {
    content: "";
    position: absolute;
    left: 0;
    width: 200px;
    height: 100px;
    background: url('<?php echo site_url(); ?>/wp-content/uploads/2023/07/Ellipse-3-3.png') no-repeat;
    background-size: cover;
    z-index: 0;
}

</style>
