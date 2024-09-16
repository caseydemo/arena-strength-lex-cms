<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <nav class='navbar navbar-expand-lg myNavBar'>
        <div class='container-fluid'>                
            <img 
                src="<?php echo get_template_directory_uri(); ?>/images/GYMLOGO.png" 
                alt="ARENA STRENGTH AND PERFORMANCE LOGO"
                width="266"
                height="83"
            >            
            <!-- <Image
                        src='/GYMLOGO.png'
                        alt='ARENA STRENGTH AND PERFORMANCE LOGO'
                        width={266}
                        height={83}
                    /> -->
            
            <button
                class='navbar-toggler'
                type='button'
                data-bs-toggle='collapse'
                data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown'
                aria-expanded='false'
                aria-label='Toggle navigation'>
                image 2
                <!-- <Image
                        class='barbell-icon'
                        src='/barbell_icon.webp'
                        alt='barbell icon'
                        width={35}
                        height={30}
                    /> -->
            </button>
            <div
                class='collapse navbar-collapse justify-content-end'
                id='navbarNavDropdown'>
                <ul class='navbar-nav mr-auto'>
                    <li class='nav-item myNavItem'>
                        <Link
                            href='#service-open-gym'
                            class='nav-link'>
                        Open Gym
                        </Link>
                    </li>
                    <li class='nav-item myNavItem'>
                        <Link
                            href='#service-group-classes'
                            class='nav-link'>
                        Group Classes
                        </Link>
                    </li>
                    <li class='nav-item myNavItem'>
                        <Link
                            href='#service-personal-training'
                            class='nav-link'>
                        Personal Training
                        </Link>
                    </li>
                    <li class='nav-item myNavItem'>
                        <Link
                            href='#service-rehab-only'
                            class='nav-link'>
                        Rehab Only
                        </Link>
                    </li>
                    <li class='nav-item myNavItem'>
                        <Link
                            href='#contact-us-form'
                            class='nav-link'>
                        Contact Us
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>