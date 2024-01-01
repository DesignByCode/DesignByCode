<?php

    namespace Database\Seeders;

    use App\Models\Post;
    use Carbon\Carbon;
    use Illuminate\Database\Seeder;

    class PostSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            $posts = [
                [
                    'title' => 'Exploring the Spectrum of Web Hosting: Finding the Perfect Fit for Your Website',
                    "hero" => "/img/blog/blog-1.webp",
                    'excerpt' => "Choosing the right web hosting is crucial for a seamless online presence. Dive into this comprehensive guide to understand the various types of web hosting and discover which one aligns best with your website's needs.",
                    'body' => "
In the vast realm of the internet, where websites thrive and businesses flourish, the backbone of a successful online presence often hinges on the right web hosting choice. Understanding the diverse spectrum of web hosting options available
is essential for making an informed decision that suits your website's requirements.

Let's embark on a journey through the different types of web hosting:

## Shared Hosting:

Shared hosting serves as the entry point for many website owners due to its cost-effectiveness. Multiple websites share resources on a single server. However, potential resource limitations can affect performance when traffic spikes occur
on any one site.

## Virtual Private Server (VPS) Hosting:

VPS hosting bridges the gap between shared and dedicated hosting. It provides dedicated resources within a shared environment, ensuring better performance and control compared to shared hosting.

## Dedicated Server Hosting:

For websites demanding unparalleled control and resources, dedicated server hosting offers an entire physical server exclusively for one user. This type of hosting is ideal for high-traffic websites or resource-intensive applications.

## Cloud Hosting:

Harnessing the power of multiple interconnected servers, cloud hosting offers scalability and flexibility. Resources can be easily scaled up or down based on demand, making it suitable for fluctuating traffic.

## Managed WordPress Hosting:

Tailored specifically for WordPress users, this hosting type optimizes performance, security, and support for WordPress-related issues. It simplifies management by handling updates, backups, and security measures.

## Reseller Hosting:

Reseller hosting empowers individuals or businesses to sell hosting services. It allows customization of hosting plans and management of multiple client accounts under their brand.

## eCommerce Hosting:

Designed for online stores, eCommerce hosting offers specialized features such as SSL certificates and payment gateways, ensuring a secure and scalable platform for conducting online business.

## Colocation Hosting:

Colocation hosting involves renting space in a data center to house your physical server hardware. Users manage their hardware and software while leveraging the data center's infrastructure.

## In conclusion

The perfect web hosting solution depends on various factors, including website traffic, technical requirements, scalability needs, and budget constraints. Evaluating these factors is crucial to finding the hosting type
that best aligns with your website's goals and growth trajectory.
",
                    'live' => Carbon::create(2023, 12, 23, 12, 00, 00),
                    'user_id' => 1,
                    'created_at' => Carbon::create(2023, 12, 23, 12, 00, 00),
                    'updated_at' => Carbon::create(2023, 12, 23, 12, 00, 00)
                ],
                [
                    'title' => 'Navigating eCommerce Realms - Unveiling Self-Hosting vs. Hosted Solutions',
                    "hero" => "/img/blog/blog-2.webp",
                    'excerpt' => "Embarking on an eCommerce journey? Discover the pivotal choice between self-hosting and hosted solutions. Unravel the nuances, weigh the options, and find the perfect fit for your online store's success. Dive into the realm of eCommerce platforms and make an informed decision to shape your digital storefront's destiny.",
                    'body' => "
## Understanding eCommerce Websites: Self-Hosting vs. Hosted Solutions

In today's digital era, eCommerce has become an integral part of how businesses sell their products and services. An eCommerce website serves as the virtual storefront where customers can browse, select, and purchase items online. However,
setting up an online store involves crucial decisions, especially when it comes to hosting options: self-hosting and hosted solutions.

## What is an eCommerce Website?

An eCommerce website is an online platform that allows businesses to sell their products or services over the internet. These websites enable customers to explore a catalog of items, add desired products to a virtual shopping cart, and
securely complete transactions through various payment gateways.

## Self-Hosting vs. Hosted Solutions

### Self-Hosting:

Self-hosting an eCommerce website involves the business being responsible for managing and maintaining all aspects of the website. This includes purchasing web hosting, installing and managing the software, and handling security measures.
Popular self-hosted platforms like WooCommerce (for WordPress) and Magento offer extensive customization options but require technical expertise to set up and manage effectively.

#### Benefits of Self-Hosting:

Customization: Businesses have greater control over the design and functionality of their online store, allowing for extensive customization to meet specific needs.
Scalability: With self-hosted solutions, businesses have more flexibility to scale their eCommerce website as their operations grow.
Ownership: Complete ownership and control of the website and its data reside with the business.

### Hosted Solutions:

Hosted eCommerce platforms, such as [Shopify](https://shopify.pxf.io/designbycode), BigCommerce, and Wix, provide a more user-friendly approach. These platforms handle the technical aspects of hosting, security, updates, and
support. Users can select from
pre-designed
templates
and manage their store through a user-friendly interface.

#### Benefits of Hosted Solutions:

Ease of Use: These platforms offer user-friendly interfaces, making it easier for individuals without technical expertise to set up and manage their online store.
Security and Maintenance: Hosting platforms handle security measures, updates, and technical maintenance, reducing the workload for the business owner.
Support: Most hosted solutions offer customer support, helping users troubleshoot issues and navigate the platform.

## Choosing the Right Option:

The decision between self-hosting and hosted solutions depends on various factors such as technical expertise, customization needs, scalability requirements, and budget constraints. While self-hosting provides greater control and
customization, hosted solutions offer simplicity and ease of use.

In conclusion, both self-hosting and hosted solutions have their advantages, and the choice ultimately depends on the unique needs and priorities of the business. Whether opting for complete control or convenience, selecting the right
eCommerce platform lays the foundation for a successful online business venture.
",
                    'live' => Carbon::create(2023, 12, 22, 12, 00, 00),
                    'user_id' => 1,
                    'created_at' => Carbon::create(2023, 12, 22, 12, 00, 00),
                    'updated_at' => Carbon::create(2023, 12, 22, 12, 00, 00)
                ],
            ];

            foreach ($posts as $post) {
                Post::create($post);
            }
        }
    }
