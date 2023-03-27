<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acme Rockets</title>
  <link rel="stylesheet" href="/assets/css/styles.css" />
  <script src="/assets/js/main.js" defer></script>
</head>

<body class="min-h-screen bg-slate-50 dark:bg-black dark:text-white">
  <header class="sticky top-0 z-10 bg-teal-700 text-white">
    <section class="mx-auto flex max-w-4xl items-center justify-between p-4">
      <h1 class="text-3xl font-medium">
        <a href="#hero">🚀 Acme Rockets</a>
      </h1>
      <div>
        <button id="hamburger-button" class="relative h-8 w-8 cursor-pointer text-3xl md:hidden">
          <!-- &#9776; -->
          <div
            class="absolute top-4 -mt-0.5 h-1 w-8 rounded bg-white transition-all duration-500 before:absolute before:h-1 before:w-8 before:-translate-x-4 before:-translate-y-3 before:rounded before:bg-white before:transition-all before:duration-500 before:content-[''] after:absolute after:h-1 after:w-8 after:-translate-x-4 after:translate-y-3 after:rounded after:bg-white after:transition-all after:duration-500 after:content-['']">
          </div>
        </button>
        <nav class="hidden space-x-8 text-xl md:block" aria-label="main">
          <a href="#rockets" class="hover:opacity-90">Our Rockets</a>
          <a href="#testimonials" class="hover:opacity-90">Testimonials</a>
          <a href="#contact" class="hover:opacity-90">Contact Us</a>
        </nav>
      </div>
    </section>
    <section id="mobile-menu"
      class="top-68 justify-content-center absolute hidden w-full origin-top animate-open-menu flex-col bg-black text-5xl">
      <!-- <button class="text-8xl self-end px-6">
                &times;
            </button> -->
      <nav class="flex min-h-screen flex-col items-center py-8" aria-label="mobile">
        <a href="#hero" class="w-full py-6 text-center hover:opacity-90">Home</a>
        <a href="#rockets" class="w-full py-6 text-center hover:opacity-90">Our Rockets</a>
        <a href="#testimonials" class="w-full py-6 text-center hover:opacity-90">Testimonials</a>
        <a href="#contact" class="w-full py-6 text-center hover:opacity-90">Contact Us</a>
        <a href="#footer" class="w-full py-6 text-center hover:opacity-90">Legal</a>
      </nav>
    </section>
  </header>
  <main class="mx-auto max-w-4xl">
    <section id="hero"
      class="widescreen:section-min-height tallscreen:section-min-height mb-12 flex scroll-mt-40 flex-col-reverse items-center justify-center gap-8 p-6 sm:flex-row">
      <article class="sm:w-1/2">
        <h2 class="max-w-md text-center text-4xl font-bold text-slate-900 dark:text-white sm:text-left sm:text-5xl">
          We Boldy Go
          <span class="text-indigo-700 dark:text-indigo-300">Where No Rocket</span>
          Has Gone Before...
        </h2>
        <p class="mt-4 max-w-md text-center text-2xl text-slate-700 dark:text-slate-400 sm:text-left">
          We're building rockets for the next century today. From the moon to
          Mars, Jupiter and beyond...
        </p>
        <p class="mt-4 max-w-md text-center text-2xl text-slate-700 dark:text-slate-400 sm:text-left">
          Think Acme Rockets.
        </p>
      </article>
      <img class="w-1/2" src="/assets/images/rocketdab.png" alt="Rocket Dab" />
    </section>

    <hr class="mx-auto w-1/2 bg-black dark:bg-white" />

    <section id="rockets" class="widescreen:section-min-height tallscreen:section-min-height my-12 scroll-mt-20 p-6">
      <h2 class="mb-6 text-center text-4xl font-bold text-slate-900 dark:text-white sm:text-5xl">
        Our Rockets
      </h2>
      <ul class="mx-auto my-12 flex list-none flex-col items-center gap-8 sm:flex-row">
        <li
          class="flex w-2/3 flex-col items-center rounded-3xl border border-solid border-slate-900 bg-white py-6 px-2 shadow-xl dark:border-gray-100 dark:bg-black sm:w-5/6">
          <img src="/assets/images/rocketman.png" alt="Explorer" class="mb-6 w-1/2" />
          <h3 class="text-center text-3xl text-slate-900 dark:text-white">
            Explorer
          </h3>
          <p class="mt-2 hidden text-center text-3xl text-slate-500 dark:text-slate-400 sm:block">
            $
          </p>
          <p class="mt-2 text-center text-2xl text-slate-500 dark:text-slate-400 sm:hidden">
            Affordable Exploration
          </p>
        </li>
        <li
          class="flex w-2/3 flex-col items-center rounded-3xl border border-solid border-slate-900 bg-white py-6 px-2 shadow-xl dark:border-gray-100 dark:bg-black sm:w-5/6">
          <img src="/assets/images/rocketride.png" alt="Adventurer" class="mb-6 w-1/2" />
          <h3 class="text-center text-3xl text-slate-900 dark:text-white">
            Adventurer
          </h3>
          <p class="mt-2 hidden text-center text-3xl text-slate-500 dark:text-slate-400 sm:block">
            $$
          </p>
          <p class="mt-2 text-center text-2xl text-slate-500 dark:text-slate-400 sm:hidden">
            Best Selling Rocket!
          </p>
        </li>
        <li
          class="flex w-2/3 flex-col items-center rounded-3xl border border-solid border-slate-900 bg-white py-6 px-2 shadow-xl dark:border-gray-100 dark:bg-black sm:w-5/6">
          <img src="/assets/images/rocketlaunch.png" alt="Infinity" class="mb-6 w-1/2" />
          <h3 class="text-center text-3xl text-slate-900 dark:text-white">
            Infinity
          </h3>
          <p class="mt-2 hidden text-center text-3xl text-slate-500 dark:text-slate-400 sm:block">
            $$$
          </p>
          <p class="mt-2 text-center text-2xl text-slate-500 dark:text-slate-400 sm:hidden">
            Luxury Starship
          </p>
        </li>
      </ul>
    </section>

    <hr class="mx-auto w-1/2 bg-black dark:bg-white" />

    <section id="testimonials"
      class="widescreen:section-min-height tallscreen:section-min-height my-12 scroll-mt-20 p-6">
      <h2 class="mb-6 text-center text-4xl font-bold text-slate-900 dark:text-white sm:text-5xl">
        Testimonials
      </h2>
      <figure class="my-12">
        <blockquote class="relative rounded-3xl bg-teal-600 py-12 pl-14 pr-8 dark:bg-black">
          <p
            class="mt-2 text-left text-2xl text-white before:absolute before:top-0 before:left-0 before:translate-x-2 before:translate-y-2 before:transform before:font-serif before:text-9xl before:text-white before:opacity-25 before:content-['\201C'] after:absolute after:-bottom-20 after:right-0 after:-translate-x-2 after:-translate-y-2 after:transform after:font-serif after:text-9xl after:text-white after:opacity-25 after:content-['\201D'] dark:text-slate-400 sm:text-3xl">
            Acme has always been there for me. Their Explorer rocket arrived
            in a wooden crate as expected. Life-long customer! A++ shopping
            experience.
          </p>
        </blockquote>
        <figcaption class="mt-2 text-right text-xl italic text-slate-500 dark:text-slate-400 sm:text-2xl">
          &#8212;Wile E. Coyote, Genius
        </figcaption>
      </figure>
      <figure class="my-12">
        <blockquote class="relative rounded-3xl bg-teal-600 py-12 pl-14 pr-8 dark:bg-black">
          <p
            class="mt-2 text-left text-2xl text-white before:absolute before:top-0 before:left-0 before:translate-x-2 before:translate-y-2 before:transform before:font-serif before:text-9xl before:text-white before:opacity-25 before:content-['\201C'] after:absolute after:-bottom-20 after:right-0 after:-translate-x-2 after:-translate-y-2 after:transform after:font-serif after:text-9xl after:text-white after:opacity-25 after:content-['\201D'] dark:text-slate-400 sm:text-3xl">
            The Acme Adventurer Rocket has thwarted my Illudium Q-36 Explosive
            Space Modulator on several occassions.
            <span class="italic">This makes me very, very angry!</span>
            Nevertheless, K-9 and I have awarded Acme the Martian contract for
            space exploration rockets based on Acme's quality and sturdy
            designs.
          </p>
        </blockquote>
        <figcaption class="mt-2 text-right text-xl italic text-slate-500 dark:text-slate-400 sm:text-2xl">
          &#8212;Marvin The Martian &amp; K-9
        </figcaption>
      </figure>
      <figure class="my-12">
        <blockquote class="relative rounded-3xl bg-teal-600 py-12 pl-14 pr-8 dark:bg-black">
          <p
            class="mt-2 text-left text-2xl text-white before:absolute before:top-0 before:left-0 before:translate-x-2 before:translate-y-2 before:transform before:font-serif before:text-9xl before:text-white before:opacity-25 before:content-['\201C'] after:absolute after:-bottom-20 after:right-0 after:-translate-x-2 after:-translate-y-2 after:transform after:font-serif after:text-9xl after:text-white after:opacity-25 after:content-['\201D'] dark:text-slate-400 sm:text-3xl">
            I knew I not only wanted &#8212;
            <span class="italic">I needed</span> &#8212; Acme's Infinity
            Rocket for my mission in space. Acme delivered in one day! Nothing
            says <q class="italic">Take me to your leader</q> like Acme's
            Infinity Rocket! 💯
          </p>
        </blockquote>
        <figcaption class="mt-2 text-right text-xl italic text-slate-500 dark:text-slate-400 sm:text-2xl">
          &#8212;Buzz Lightyear
        </figcaption>
      </figure>
    </section>

    <hr class="mx-auto w-1/2 bg-black dark:bg-white" />

    <section id="contact" class="widescreen:section-min-height tallscreen:section-min-height my-12 scroll-mt-16 p-6">
      <h2 class="mb-6 text-center text-4xl font-bold text-slate-900 dark:text-white sm:text-5xl">
        Contact Us
      </h2>
      <form action="" class="items-left mx-auto flex max-w-4xl flex-col gap-4 text-2xl sm:text-3xl">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required minlength="3" maxlength="60" placeholder="Your Subject"
          class="w-full rounded-xl border border-solid border-slate-900 p-3 text-2xl text-black dark:border-none sm:text-3xl" />
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required
          class="w-full rounded-xl border border-solid border-slate-900 p-3 text-2xl text-black dark:border-none sm:text-3xl"></textarea>
        <button
          class="w-48 rounded-xl border border-solid border-slate-900 bg-teal-700 p-3 text-white hover:bg-teal-600 active:bg-teal-500 dark:border-none">
          Submit
        </button>
      </form>
    </section>
  </main>

  <footer id="footer" class="bg-teal-700 text-xl text-white">
    <section class="mx-auto flex max-w-4xl flex-col p-4 sm:flex-row sm:justify-between">
      <address>
        <h2>Acme Rocket-Powered Products, Inc.</h2>
        555 Astro Way<br />
        Fairfield, New Jersey 12345-5555<br />
        Email:
        <a href="mailto:inquiries@acmerockets.com">Inquires@AcmeRockets.com</a><br />
        Phone: <a href="tel:+15555555555">(555) 555-5555</a>
      </address>
      <nav class="hidden flex-col gap-2 md:flex" aria-label="footer">
        <a href="#rockets" class="hover:opacity-90">Our Rockets</a>
        <a href="#testimonials" class="hover:opacity-90">Testimonials</a>
        <a href="#contact" class="hover:opacity-90">Contact Us</a>
      </nav>
      <div class="flex flex-col sm:gap-2">
        <p class="text-right">Copyright &copy; <span id="year">2022</span></p>
        <p class="text-right">All Rights Reserved</p>
      </div>
    </section>
  </footer>
</body>

</html>