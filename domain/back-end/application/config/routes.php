<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    $route['404_override'] =''; // default page will be here
    $route['translate_uri_dashes'] = FALSE; // if this true, you  call with controller and thats method

// FRONT-END AREA
    $route['default_controller'] = 'Home'; // front is controller name

    $route['/'] = 'Home'; // front is controller name

    $route['about']      =  'frontend/about';

    $route['accommodation']      =  'frontend/Accommodation';
    $route['single-room/(:num)'] = 'frontend/Accommodation/SingleRoom/$1';

    $route['amenities']      =  'frontend/Amenities';

    $route['package']='frontend/Package';

    $route['location-advantages']='Front/LocationAdvantages';

    $route['gallery']='frontend/Gallery';

    $route['testimonials']   = 'frontend/Testimonials';
    $route['Blog']   = 'frontend/Blog';

    /* contact page */
    $route['contact']   = 'frontend/Contact';
    $route['thanksme']   = 'frontend/Contact/thanks';

    $route['contact-us/(:any)'] = 'frontend/Contactus/$1';
    $route['enquiry']      	  = 'frontend/Enquiry';
    $route['review']='frontend/Review';


//ADMIN BACKEND AREA
    $route['login']='Admin/login';
    $route['logout']='Admin/logout';
    $route['dashboard.php']='Admin/dashboard';

    $route['profile']='Admin/profile';
    $route['change_pass']='Admin/change_pass';
    $route['save_password']='Admin/save_password';


    //API Get domain for search data
    $route['admin/domain']='Admin/domain';

//   COMPANY
    $route['admin/company']='Company/index';
    $route['admin/company/add']='Company/add';
    $route['admin/company/edit/(:num)']='Company/edit/$1';
    $route['admin/company/delete/(:num)']='Company/delete/$1';
    $route['admin/company/view/(:num)']='Company/view/$1';


// HOME
    $route['admin/slider']='Slider/index';
    $route['admin/slider/add']='Slider/add';
    $route['admin/slider/edit/(:num)']='Slider/edit/$1';
    $route['admin/slider/delete/(:num)']='Slider/delete/$1';
    $route['admin/slider/view/(:num)']='Slider/view/$1';

        $route['admin/facility']='Slider/Facility';
        $route['admin/facility/add']='Slider/addFacility';
        $route['admin/facility/delete/(:num)']='Slider/deleteFacility/$1';


        $route['admin/home/customize']['get']='Slider/getHomeData';
        $route['admin/home/customize']['post']='Slider/updateHomeData';

// about
    $route['about/point-word']='about/index';
    $route['about/point-word/add']='about/addPointWord';
    $route['about/point-word/edit/(:num)']='about/editPointWord/$1';
    $route['about/point-word/delete/(:num)']='about/deletePointWord/$1';

    $route['admin/about/customize']['get']='about/getAboutData';
    $route['admin/about/customize']['post']='about/updateAboutData';

// ACCOMMODATION
    $route['admin/accommodation']='Accommodation/index';
    $route['admin/accommodation/add']='Accommodation/add';
    $route['admin/accommodation/edit/(:num)']='Accommodation/edit/$1';
    $route['admin/accommodation/delete/(:num)']='Accommodation/delete/$1';
    $route['admin/accommodation/view/(:num)']='Accommodation/view/$1';
    $route['admin/accommodation/customize']['get']='Accommodation/getAccommodationData';
    $route['admin/accommodation/customize']['post']='Accommodation/updateAccommodationData';

        $route['admin/room-facility']='AccommodationType/index';
        $route['admin/room-facility/add']='AccommodationType/addFacility';
        $route['admin/room-facility/delete/(:num)']='AccommodationType/deleteFacility/$1';

        $route['admin/room-overview']='AccommodationType/RoomOverview';
        $route['admin/room-overview/add']='AccommodationType/addRoomOverview';
        $route['admin/room-overview/delete/(:num)']='AccommodationType/deleteRoomOverview/$1';

        $route['admin/room-photo']='AccommodationType/RoomPhoto';
        $route['admin/room-photo/add']='AccommodationType/addRoomPhoto';
        $route['admin/room-photo/delete/(:num)']='AccommodationType/deleteRoomPhoto/$1';


// AMENITIES
    $route['admin/amenities']='Amenities/index';
    $route['admin/amenities/add']='Amenities/add';
    $route['admin/amenities/edit/(:num)']='Amenities/edit/$1';
    $route['admin/amenities/delete/(:num)']='Amenities/delete/$1';
    $route['admin/amenities/view/(:num)']='Amenities/view/$1';

        $route['admin/amenities/customize']['get']='Amenities/getAmenitiesData';
        $route['admin/amenities/customize']['post']='Amenities/updateAmenitiesData';

//    PACKAGE
    $route['admin/package']='Package/index';
    $route['admin/package/add']='Package/add';
    $route['admin/package/edit/(:num)']='Package/edit/$1';
    $route['admin/package/delete/(:num)']='Package/delete/$1';
    $route['admin/package/view/(:num)']='Package/view/$1';

    $route['admin/package/customize']['get']='Package/getPackageData';
    $route['admin/package/customize']['post']='Package/updatePackageData';

        $route['admin/inclusions']='Package/inclusions';
        $route['admin/inclusions/add']='Package/addInclusions';
        $route['admin/inclusions/delete/(:num)']='Package/deleteInclusions/$1';



    // GALLARY
    $route['admin/gallary']='Gallary/index';
    $route['admin/gallary/add']='Gallary/add';
    $route['admin/gallary/edit/(:num)']='Gallary/edit/$1';
    $route['admin/gallary/delete/(:num)']='Gallary/delete/$1';
    $route['admin/gallary/view/(:num)']='Gallary/view/$1';

    $route['admin/gallary/customize']['get']='Gallary/getGalleryData';
    $route['admin/gallary/customize']['post']='Gallary/updateGalleryData';

        $route['admin/gallery-type']='Gallary/GalleryType';
        $route['admin/gallery-type/add']='Gallary/addGalleryType';
        $route['admin/gallery-type/delete/(:num)']='Gallary/deleteGalleryType/$1';


    //    TESTINOMIAL
    $route['admin/testinomial']='Testinomial/index';
    $route['admin/testinomial/add']='Testinomial/add';
    $route['admin/testinomial/edit/(:num)']='Testinomial/edit/$1';
    $route['admin/testinomial/delete/(:num)']='Testinomial/delete/$1';

    $route['admin/testinomial/customize']['get']='Testinomial/getTestinomialData';
    $route['admin/testinomial/customize']['post']='Testinomial/updateTestinomialData';


    /*SEO TAGS*/
    $route['admin/seotags']='Seotools/index';
    $route['admin/seotags/add']='Seotools/add';
    $route['admin/seotags/edit/(:num)']='Seotools/edit/$1';
    $route['admin/seotags/delete/(:num)']='Seotools/delete/$1';
