<?php

// Extend the class
class Theme_Option extends bellaAdminPageFramework {
    
    /**
     * The set-up method which is triggered automatically with the 'wp_loaded' hook.
     * 
     * Here we define the setup() method to set how many pages, page titles and icons etc.
     */
    public function setUp() {
       
        // Create the root menu - specifies to which parent menu to add.
        $this->setRootMenuPage( 'Options' );  
 
        // Add the sub menus and the pages.
        $this->addSubMenuItems(
			array(
                'title'     => 'Header',
                'page_slug' => 'header'
            ),
			array(
                'title'     => 'Home',
                'page_slug' => 'home'
            ),
			array(
                'title'     => 'Footer',
                'page_slug' => 'footer'
            )
        );
		
    }
	
	//	Logo & Banner
	public function load_header( $oAdminPage ) {
	
        $this->addSettingFields(
            array(
                'field_id'      => 'logo',
                'type'          => 'image',
                'title'         => 'Site Logo',
                'description'   => '',  
				'default'       => get_template_directory_uri().'/images/logo.png',				
            ),
			array(
                'field_id'      => 'a_link_01',
                'type'          => 'text',
                'title'         => 'Number Link',
                'description'   => '',
                'default'       => home_url().'/?p=152',
            ),
			array(
                'field_id'      => 'a_link_02',
                'type'          => 'text',
                'title'         => 'Delivery Info Link',
                'description'   => '',
                'default'       => home_url().'/?p=148',
            ),
			array(
                'field_id'      => 'a_link_03',
                'type'          => 'text',
                'title'         => 'How to Order Link',
                'description'   => '',
                'default'       => home_url().'/?p=150',
            ),
			array(
                'field_id'      => 'a_link_04',
                'type'          => 'text',
                'title'         => 'Call to Order Link',
                'description'   => '',
                'default'       => home_url().'/?p=150',
            ),
			array(
                'field_id'      => 'a_link_05',
                'type'          => 'text',
                'title'         => 'Visit Concern Link',
                'description'   => '',
                'default'       => home_url().'/?p=179',
            ),
			array(
                'field_id'      => 'supp_01',
                'type'          => 'text',
                'title'         => 'Call to Order',
                'description'   => '',
                'default'       => 'Call To Order</br>+8801740588988',
            ),
			array(
                'field_id'      => 'supp_02',
                'type'          => 'text',
                'title'         => 'Visit Our Concern',
                'description'   => '',
                'default'       => 'Visit</br>Our Concern',
            ),
            array(
                'field_id'      => 'submit_button',
                'type'          => 'submit',
            )   
        );        
        
    }
	
	//	Logo & Banner
	public function load_home( $oAdminPage ) {
	
        $this->addSettingFields(
           
		    array(
                'field_id'      => 'fav_title',
                'type'          => 'text',
                'title'         => 'Favourite Product Title',
                'description'   => '',  
				'default'       => 'Favourite Products',				
            ),
			array(
                'field_id'      => 'fav_cat',
                'type'          => 'text',
                'title'         => 'Favourite Products Category',
                'description'   => '',  
				'default'       => 'hoodies',				
            ),
			array(
                'field_id'      => 'ons_title',
                'type'          => 'text',
                'title'         => 'onsale Title',
                'description'   => '',  
				'default'       => 'On Sale',				
            ),
			array(
                'field_id'      => 'ons_cat',
                'type'          => 'text',
                'title'         => 'onsale Category',
                'description'   => '',  
				'default'       => 'hoodies',				
            ),
			array(
                'field_id'      => 'ons2_title',
                'type'          => 'text',
                'title'         => 'onsale Title 2',
                'description'   => '',  
				'default'       => 'On Sale',				
            ),
			array(
                'field_id'      => 'ons2_cat',
                'type'          => 'text',
                'title'         => 'onsale Category 2',
                'description'   => '',  
				'default'       => 'hoodies',				
            ),
            array(
                'field_id'      => 'submit_button',
                'type'          => 'submit',
            )   
        );        
        
    }
	
	//	Footer
	public function load_footer( $oAdminPage ) {
	
        $this->addSettingFields(
			array(
                'field_id'      => 'link_01',
                'type'          => 'text',
                'title'         => 'link_01',
                'description'   => '',
                'default'       => home_url().'/?p=148',
            ),
			array(
                'field_id'      => 'link_02',
                'type'          => 'text',
                'title'         => 'link_02',
                'description'   => '',
                'default'       => home_url().'/?p=181',
            ),
			array(
                'field_id'      => 'link_03',
                'type'          => 'text',
                'title'         => 'link_03',
                'description'   => '',
                'default'       => home_url().'/?p=183',
            ),
			array(
                'field_id'      => 'link_04',
                'type'          => 'text',
                'title'         => 'link_04',
                'description'   => '',
                'default'       => home_url().'/?p=183',
            ),
			array(
                'field_id'      => 'link_05',
                'type'          => 'text',
                'title'         => 'link_05',
                'description'   => '',
                'default'       => home_url().'/?p=181',
            ),
			array(
                'field_id'      => 'fb_link',
                'type'          => 'text',
                'title'         => 'Facebook Link',
                'description'   => '',
                'default'       => '#',
            ),
			array(
                'field_id'      => 'go_link',
                'type'          => 'text',
                'title'         => 'Google Link',
                'description'   => '',
                'default'       => '#',
            ),
			array(
                'field_id'      => 'tw_link',
                'type'          => 'text',
                'title'         => 'Twitter Link',
                'description'   => '',
                'default'       => '#',
            ),
			array(
                'field_id'      => 'rss_link',
                'type'          => 'text',
                'title'         => 'RSS Link',
                'description'   => '',
                'default'       => '#',
            ),
			array(
                'field_id'      => 'membership_content',
                'type'          => 'textarea',
                'title'         => 'Membership Text',
                'description'   => '',
                'default'       => 'W3Schools is optimized for learning, testing, and training.Examples might be simplified to improve reading and basic',
            ),
			array(
                'field_id'      => 'membership_img',
                'type'          => 'image',
                'title'         => 'Membership Image',
                'description'   => '',
                'default'       => get_template_directory_uri().'/images/ecab.jpg',
            ),
			array(
                'field_id'      => 'pay_img_01',
                'type'          => 'image',
                'title'         => 'Payment Image',
                'description'   => '',
                'default'       => get_template_directory_uri().'/images/payment_01.gif',
            ),
			array(
                'field_id'      => 'pay_img_02',
                'type'          => 'image',
                'title'         => 'Delivery Image',
                'description'   => '',
                'default'       => get_template_directory_uri().'/images/payment_02.jpg',
            ),
			array(
                'field_id'      => 'address',
                'type'          => 'textarea',
                'title'         => 'Address Field',
                'description'   => '',
                'default'       => '
								<b>CORPORATE</b>
									<br/>
								NEWMARKET <br/>
								SHERPUR-2100 <br/>
								CELL : 01740588988 
								<p>&nbsp;</p>
								<hr/>
								<b>CORPORATE</b>
									<br/>
								BARI-DHARA <br/>
								DHAKA-100 <br/>
								CELL : 01740588988
				',
            ),
            array(
                'field_id'      => 'submit_button',
                'type'          => 'submit',
            )   
        );        
        
    }
	
}


