<?php

namespace AdminPanel\Constants;
class Links
{

    const Home = '/';
    const AboutUs = '/about-us';
    const ContactUs = '/contact-us';
    const GetAQuote = '/get-a-quote';
    const Testimonials = '/testimonials';
    const OurProjects = '/our-projects';
    const OurPortfolio = '/our-portfolio';
    const ServiceAreas = '/services/service-areas';
    const OurBlogs = '/our-blogs';



    public static function topMenu(): array
    {
        return [
            //About Us
            'AboutUs' => [
                'id' => 1,
                'parentId' => 0,
                'title' => 'About Us',
                'url' => self::AboutUs,
                'cssClass' => '',

            ],
            //About Us Child
            'ServiceAreas' => [
                'id' => 2,
                'parentId' => 1,
                'title' => 'Service Areas',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            //About Us Child
            'Testimonials' => [
                'id' => 3,
                'parentId' => 1,
                'title' => 'Testimonials',
                'url' => self::Testimonials,
                'cssClass' => '',
            ],


            //Our services
            'OurServices' => [
                'id' => 4,
                'parentId' => 0,
                'title' => 'Our Services',
                'url' => self::ServiceAreas,
                'cssClass' => 'subCol1',
            ],
            //Our Services Child
            'CostEstimatingServices' => [
                'id' => 5,
                'parentId' => 4,
                'title' => 'Cost Estimating Services',
                'url' => '#',
                'cssClass' => '',
            ],
            'ConstructionEstimatorSydney' => [
                'id' => 6,
                'parentId' => 5,
                'title' => 'Construction Estimator Sydney',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            'BuildingEstimatorMelbourne' => [
                'id' => 7,
                'parentId' => 5,
                'title' => 'Building Estimator Melbourne',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            //Our Services Child
            'ConstructionTakeoffServices' => [
                'id' => 8,
                'parentId' => 4,
                'title' => 'Construction Takeoff Services',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            'QuantityTakeoffServices' => [
                'id' => 9,
                'parentId' => 8,
                'title' => 'Quantity Takeoff Services',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            //Our Services Child
            'ResidentialEstimatingServices' => [
                'id' => 10,
                'parentId' => 4,
                'title' => 'Residential Estimating Services',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],


            //Trades
            'Trades' => [
                'id' => 11,
                'parentId' => 0,
                'title' => 'Trades',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            //Trades Child
            'ElectricalEstimatingServices' => [
                'id' => 12,
                'parentId' => 11,
                'title' => 'Electrical Estimating Services',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],
            //Trades Child
            'ConcreteEstimatingServices' => [
                'id' => 13,
                'parentId' => 11,
                'title' => 'Concrete Estimating Services',
                'url' => self::ServiceAreas,
                'cssClass' => '',
            ],


            //Our Projects
            'OurProjects' => [
                'id' => 14,
                'parentId' => 0,
                'title' => 'Our Projects',
                'url' => self::OurProjects,
                'cssClass' => 'subCol1',
            ],
            'OurPortfolio' => [
                'id' => 20,
                'parentId' => 14,
                'title' => 'Our Portfolio',
                'url' => self::OurPortfolio,
                'cssClass' => '',
            ],

            //Blog
            'Blog' => [
                'id' => 15,
                'parentId' => 0,
                'title' => 'Blog',
                'url' => self::OurBlogs,
                'cssClass' => '',
            ],

            'ContactUs' => [
                'id' => 17,
                'parentId' => 0,
                'title' => 'Contact Us',
                'url' => self::ContactUs,
                'cssClass' => '',
            ],
            'GetAQuote' => [
                'id' => 18,
                'parentId' => 0,
                'title' => 'Affordable Estimates (30%off)',
                'url' => self::GetAQuote,
                'cssClass' => 'Promo-Btn',
            ],
            'account' => [
                'id' => 19,
                'parentId' => 0,
                'title' => '',
                'url' => '#',
                'cssClass' => '',
            ]


        ];
    }
}
