@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important;
        }

        .articles-container {
            margin-top: 40px;
        }

        .animals-invert__item {
            width: 100%;
            margin-bottom: 25px;
            display: flex;
        }

        .animals-invert__item:nth-of-type(odd) .animals-invert__item-content,
        .animals-invert__item:nth-of-type(odd) .animals-invert__item-img {
            background-color: #ebebeb;
        }

        .animals-invert__item:nth-of-type(2n) {
            border: 2px solid #e7e7e7;
            border-radius: 10px;
        }

        .animals-invert__item-img {
            position: relative;
            flex-shrink: 0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .animals-invert__item-img img {
            width: 275px;
            display: block;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .animals-invert__item-content {
            width: 100%;
            padding: 50px 30px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .animals-invert__item-content p {
            font-family: Open Sans;
            line-height: 1.5;
            font-size: 16px;
        }

        .banner img,
        .blog-container .animals-invert__item:nth-of-type(odd) .animals-invert__item-content,
        .mob_banner img {
            width: 100%;
        }

        .f-tabs {
            display: flex;
        }

        .f-h2 {
            font-size: 24px;
            margin-bottom: 7px;
            color: #202020;
        }

        .f-h2,
        .f-tab {
            /* color: #fff; */
            font-weight: 700;
            text-transform: uppercase;
        }
    </style>
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="f-page__content">
            <h1 class="collection-title">
                Blog
            </h1>
            <div class="containers articles-container">
                <a href="https://animalia.bio/blog/animaliabio-latest-updates" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/FkvOhV31yy8gZH4KgaWqmybOcgZdvJsid0HVYvgu.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Animalia.bio latest updates</h2>
                        <p>A brief update on what we have done lately and what we want to do in the nearest and distant
                            future.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/the-great-meadow-rebirth" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/xlN2JIa57AvAeKgdsMuoFwe3g92fJdv7qurybUGv.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">The Great Meadow Rebirth</h2>
                        <p>The revival of the Great Meadow, once lost to floods is now a beacon of hope for ecological
                            restoration and the return of vibrant life. The story of nature's rebirth amidst the shadows of
                            conflict, and envision the transformation of this once-devastated landscape into a thriving
                            sanctuary for both wildlife and humanity</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/the-site-of-the-greatest-technological-disaster-becomes-a-reserve-of-pristine-nature"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/0YsmNY9Q4GLT4QfZyw8a7dBHizMSA6xIDJUbdQ33.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">The site of the greatest technological disaster becomes a reserve of pristine
                            nature</h2>
                        <p>The Chornobyl disaster became yet another challenging ordeal for Ukrainians in the terrifying
                            20th century. While the story of this tragedy is important in itself, what is interesting is
                            that it created one of the most isolated natural parks, where previously a fairly populated and
                            developed area was left to itself and devoid of human influence.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/the-influence-of-ancient-greek-culture-on-animal-names"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/5IUUi527exVm8wIVjigGZ4D8SZ7cdzT7jMz44mtG.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">The Influence of Ancient Greek Culture on Animal Names</h2>
                        <p>Greek culture and philosophy lie at the foundation of modern society. Often, we don't even
                            realize how many everyday ideas have their roots in Greek philosophical tradition. Even the very
                            concept of "Animalia," as an encyclopedia of animals, we owe to Aristotle, as the first
                            systematic explorer of the natural world. Not to mention that the word "encyclopedia" itself
                            derives from the Greek language.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/exploring-the-fascinating-world-of-pet-psychic-animal-communication"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/nuVf82eIhR1MWz1m8WSRfZIeCPqPhi7e52C7uOPJ.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Exploring the Fascinating World of Pet Psychic Animal Communication</h2>
                        <p>Have you ever marveled at the unspoken bond you share with your pet? The way your dog seems to
                            understand your moods, or how your cat appears to anticipate your actions? Many animals
                            communicate in ways that go beyond our human understanding. They perceive the world through
                            senses that are remarkably different from ours, often sensing things we cannot. </p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/elk-versus-reindeer" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/of5YDihOWXIhpnTwEM8ogWiIVPIBZxfwcaB2gKOq.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Elk versus Reindeer</h2>
                        <p>In the Christmas tradition, Santa Claus is often depicted as being pulled by a team of reindeer
                            (sometimes confused with elks) to deliver presents on Christmas Eve</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/an-incredible-story-of-rescuing-a-dog-from-a-war-zone"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/1Bkgj0T6pVrZlLSCBXuyL1ldxMf8XCrLs8PYolRv.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">An incredible story of rescuing a dog from a war zone</h2>
                        <p>Russia's full-scale invasion of Ukraine has given rise to numerous animal rescue stories. Today,
                            we bring you an extraordinary tale of salvation that is impossible to ignore!
                            This compelling story was shared with us by the Khvostati Charitable Foundation, an organization
                            dedicated to rescuing animals from the war zones in Ukraine. </p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/how-natural-and-humanmade-disasters-can-impact-habitats-and-populations"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/YSZziTVJE329ZipqkyAmSuum2Z4HEIUcASIA0kyU.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">How natural and human-made disasters can impact habitats and populations</h2>
                        <p>The tragedy of the dam explosion at the Kakhovka Hydroelectric Power Station by Russian occupiers
                            demonstrated how population mixing and changes in wildlife habitats occur in the wild as a
                            response to extreme cataclysms.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/americas-top-5-dog-breeds-and-how-to-care-for-them"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/UVTdGp96deyenMKg5FLomjqdi7hm2uyuUlRW6x7B.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">America's Top 5 Dog Breeds and How to Care For Them</h2>
                        <p>In the hearts of Americans, dogs occupy a special place, celebrated as much for their diverse
                            personalities as for their unwavering companionship. In a remarkable shift, 2022 saw the French
                            Bulldog ascend to the pinnacle of America's favorite breeds, dethroning the long-reigning
                            Labrador Retriever. In this article, we explore the reshuffled top five dog breeds gracing
                            American homes and provide a comprehensive care guide, emphasizing the importance of health
                            management and insurance protection for these beloved canines.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/soldiers-and-animals" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/zj2VtFvrsKZhoIy97JpEoI4m56vVeCdx3M19wbxu.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Soldiers and animals</h2>
                        <p>During the war, I returned a few times to the novel I read in childhood called “Do Androids Dream
                            of Electric Sheep?” later adapted into “Blade Runner" movie. The main idea is that the only way
                            to distinguish humans from androids is empathy and the best indicator of empathy is the
                            relationship between humans and animals. I thought this was an artistic exaggeration, but the
                            war gave us Ukrainians a chance to put many ideas to the test. </p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/animalsbio-and-generative-ai" class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/vvffnWZ8MAdJloq2acGI0u4GYy6k3LkYWvzwDh4c.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Animalia.bio and Generative AI</h2>
                        <p>We discuss how Generative AI impacts the quality of content and our approach to using AI tools in
                            Animalia.bio. Our commitment is to stick to use human moderated content from reputable sources
                            without using AI tools to generate articles, images, and texts.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/survivors-of-the-wild-amazing-animal-adaptations-part-3"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/vfJMdLG3cizSZrRKf4JIS7WgoVKpsGIBZ7NHPrK7.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Survivors of the Wild: Amazing Animal Adaptations Part 3</h2>
                        <p>Another chapter of the amazing animal adaptations series. This post is dedicated to some
                            adaptation in prey-predator dynamics</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/how-ukrainians-saved-their-animals-during-the-war"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/0DItYDoOgxDuR06t9k0rFrPaWoomhsnXC8r5hLRv.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">How Ukrainians Saved Their Animals During the War</h2>
                        <p>We, the authors and creators of this site are Ukrainians. During the last year and a half, we
                            have witnessed what animals might really mean for people, and how frequently they are willing to
                            give up everything and risk their lives to save their animals.
                            With this post, we start a series of stories about Ukrainians taking care of and saving animals
                            during the war.</p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/survivors-of-the-wild-amazing-animal-adaptations-part-2"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/qUhZQJEIA8D2qyARrzMA7QFW3xum7LOYYEaLe51Z.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Survivors of the Wild: Amazing Animal Adaptations Part 2</h2>
                        <p>In this post, we continue our exploration of amazing animal adaptations. This time we will learn
                            more about adaptation to extreme environmental conditions.
                        </p>
                    </div>
                </a>
                <a href="https://animalia.bio/blog/survivors-of-the-wild-amazing-animal-adaptations"
                    class="animals-invert__item ">
                    <div class="animals-invert__item-img">
                        <img src="https://s3.animalia.bio/blog/preview/iqd2jS8Vh0dTbFsNgb0nF2Egu5DjwW6MyZWETlCt.webp"
                            onerror="this.src = '/img/error_img.svg'" alt="alt">
                    </div>
                    <div class="animals-invert__item-content">
                        <h2 class="f-h2">Survivors of the Wild: Amazing Animal Adaptations</h2>
                        <p>From the deserts to the icy tundras, from the depths of the oceans to the highest mountaintops,
                            these animals have developed unique features and behaviors that allow them to overcome
                            challenges and outwit their competitors. Here are some of the most fantastic animal adaptations
                            found in the wild in our series of posts dedicated to different types of adaptations.</p>
                    </div>
                </a>
            </div>
            <div class="blog-pagination">
                <span class="blog-load-more hidden" out-of=" out of " load-more="LOAD MORE" last_page="1"
                    next_page="2">
                    1 - 40 out of 15 <span class="fwb text-uppercase">
                        LOAD MORE
                    </span>
                </span>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
