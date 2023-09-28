<div id="top"></div>
<!--
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
-->
<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center"> boilerplate theme</h3>

  <p align="center">
    Bootstrap 5 WordPress starter theme with SASS, vanilla JS and gulp.
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#utilities-visual-studio-code">Utilities Visual Studio Code</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project
 [![Product Name Screen Shot][product-screenshot]]([https://example.com](https://github.com/EtorresGlobParts/gpboilerplate)) 

This is a starter template designed for wordpress using vanilla javascript and sass.
The main features of this template are its great flexibility for the creation of websites through templates and custom code, has several plugins that streamline the development of specific features such as sliders, animations, etc..


<p align="right">(<a href="#top">back to top</a>)</p>



### Built With
* [HTML](https://developer.mozilla.org/es/docs/Web/HTML)
* [PHP](https://www.php.net/)
* [Javascript](https://www.javascript.com/)
* [Sass](https://sass-lang.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

Download and install node.js
1. [node.js](https://nodejs.org/es/)
2. Install Gulp
     ```sh
   npm install --global gulp-cli
   
   ```
### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/EtorresGlobParts/gpboilerplate.git
   
   ```
 
2. copy the folder with the theme to the themes folder of a wordpress installation
3. Install NPM packages
   ```sh
   npm install
   ```
4. Execute gulp 
   ```sh
   gulp
   ```

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

<br><br>
To use the styles it is necessary to create the .sass file and include it inside style.sass, then compile with gulp
   ```sass
    @import "folder/file"
   ```
To load custom js and css use the function wp_localize_script inside functions.php
  ```php
    function add_theme_scripts() {
      wp_enqueue_script("name", "url/path" , array(), version);
    }
   ```
  
This theme uses the Wordpress folder structure so the pages are located inside page-templates.
<br>
Default templates:
* Home
* Thanks
* Demo with Boostrap elements
* Error 404
* Blog
* Single Post
* Search Page

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- ROADMAP -->
## Roadmap

- [x] Use vanilla JS
- [x] Use Boostrap 5
- [x] Add custom pagination
- [ ] Search autocomplete with Ajax
- [ ] List of utilities


<p align="right">(<a href="#top">back to top</a>)</p>





<!-- CONTACT -->
## Contact

Project Link: [https://github.com/edutorres12/boilerplate-theme](https://github.com/edutorres12/boilerplate-theme)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- Utilities Visual Studio -->
## Utilities Visual Studio Code
* Sass
* Font Awesome Gallery
* Bootstrap 5 Quick Snippets
* PHP Intelephense
* Format HTML in PHP
* WordPress Snippets		
* JavaScript (ES6) code snippets
* CMD


<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [Wordpress](https://wordpress.com/es/?aff=27964)
* [splide](https://splidejs.com/)
* [glightbox](https://biati-digital.github.io/glightbox/)
* [sticksy](https://sticksy.js.org/)
* [bootstrap](https://getbootstrap.com/)
* [fontawesome](https://fontawesome.com/)
* [gulp](https://gulpjs.com/)
* [sass](https://sass-lang.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[product-screenshot]: capture.jpg
