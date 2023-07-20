
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<main>

      <article class="terms-and-conditions">
	  <a href="useregister.php"><i class="fa fa-close" style="font-size:25px;color:black;float:right;margin-top:-20px;margin-right:-10px;"></i></a>
        <h1>Terms and Conditions</h1>
        <h2>Welcome to our HomeKey website</h2>
		 <p>It is essential to have a legal written agreement  between you and the owner. The owner can keep the original documents and you can keep a copy of documnets.<p>
        <p>
          You are not leave the rental house before the duration of agreement, If you are  leave you must paid monthly rent untill your duration complete.
        </p>
        <h3>Cookies</h3>
        <p>
          We employ the use of cookies. By accessing our website, you agreed to use cookies in agreement with our
          company's Privacy Policy.
        </p>
        <p>
          Most interactive websites use cookies to let us retrieve the user's details for each visit. Cookies are used
          by our website to enable the functionality of certain areas to make it easier for people visiting our website.
          Some of our affiliate/advertising partners may also use cookies.
        </p>
        <h3>License</h3>
        <p>
          Unless otherwise stated, LOPYI and its licensors own the intellectual property rights for all material on our
          website. All intellectual property rights are reserved. You may access this from our website for your own
          personal use subjected to restrictions set in these terms and conditions.
        </p>
        <p>You must not:</p>
        <ul>
          <li>Republish material from our website</li>
          <li>Sell, rent or sub-license material from our website</li>
          <li>Reproduce, duplicate or copy material from our website</li>
          <li>Redistribute content from our website</li>
        </ul>
       
       
        <h3>Content Liability</h3>
        
        
        <h3>Removal of links from our website</h3>
        <p>
          If you find any link on our website that is offensive for any reason, you are free to contact and inform us
          any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you
          directly.
        </p>
       
       
      </article>
      <div class="term-buttons-container">
        <button class="scroll-to-bottom">
          <svg
            width="20"
            height="11"
            xmlns="http://www.w3.org/2000/svg"
            title="Go to bottom to accept terms and conditions"
          >
            <title>Go to bottom to accept terms and conditions</title>
            <path
              d="M20 1.39L18.594 0 9.987 8.261l-.918-.881.005.005L1.427.045 0 1.414 9.987 11 20 1.39"
              fill="#fff"
              fill-rule="evenodd"
            />
          </svg>
        </button>
        <form method="POST" name="terms-and-conditions-form" action="#">
         
        </form>
      </div>
    </main>
	</head>
	<style>
	*,
*:before,
*:after {
  box-sizing: border-box;
}

:root {
  --clr-light: #f5f5f5;
  --clr-white: #fff;
  --clr-dark-blue: #293a80;
}

html {
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
}

main {
  display: block;
}

button {
  display: inline-block;
  border: none;
  font-family: inherit;
  margin: 0;
  line-height: 1.15;
  overflow: visible;
  text-transform: none;
  -webkit-appearance: button;
  cursor: pointer;
  text-align: center;
}

button::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

button:-moz-focusring {
  outline: 2px dotted ButtonText;
}

:focus {
  --clr-orange: #f39422;
  outline: 2px dotted var(--clr-orange);
}

body {
  margin: 0;
  background: hsla(93, 100%, 44%, 0.6);
  

  font-family: "Open Sans", sans-serif;
  --clr-dark: #1b262c;
  color: var(--clr-dark);
}

main {
  padding: 10vh 1rem 0;
  display: grid;
  grid-template: 0.5fr 65px / 2fr minmax(200px, 800px) 2fr;
  align-content: center;
}

.terms-and-conditions {
  grid-column: 2 / 3;
  grid-row: 1;
  height: 60vh;
  margin: 0 auto;
  max-width: 800px;
  padding: 2em;
  overflow-y: scroll;
  border-radius: 5px 5px 0px 0px;
  background-color: var(--clr-white);

  &::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: var(--clr-light);
  }

  &::-webkit-scrollbar {
    width: 15px;
    background-color: var(--clr-light);
  }

  &::-webkit-scrollbar-thumb {
    background-color: var(--clr-dark-blue);
  }

  h1 {
    font-size: calc(1.7rem + 0.25vw);
    line-height: 1.1;
  }

  h2 {
    font-size: calc(1.2rem + 0.25vw);
    font-weight: normal;
  }

  h3 {
    font-size: calc(1.1rem + 0.25vw);
    font-weight: normal;
  }

  p {
    font-size: 0.95rem;
    line-height: 1.6;
  }

  ul li {
    margin-bottom: 0.5rem;
    padding-left: 0.25rem;
    line-height: 1.5;
  }

  ul li::marker {
    font-size: 1em;
    color: #6c63ff;
    font-family: sans-serif;
  }
}

.term-buttons-container {
  grid-row: 2;
  grid-column: 2 / 3;
  display: flex;
  flex-direction: column;
  margin-top: -2px;
  padding: 0.7em;
  z-index: 1;
  border-top: 1px solid rgb(243, 243, 243);
  background-color: #fdfdfd;
  border-radius: 0 0 5px 5px;
}

.scroll-to-bottom {
  justify-self: start;
  align-self: center;
  margin-top: -23px;
  padding: 0.5em;
  font-size: 1rem;
  border-radius: 50%;
  background-color: hsla(217, 50%, 55%, 0.7);
  box-shadow: 0px 10px 15px -6px rgba(0, 0, 0, 0.2);

  &:hover {
    background: hsla(217, 50%, 55%, 1);
  }
  &[aria-hidden="true"] {
    display: none;
  }
}

[name="terms-and-conditions-form"] {
  justify-self: flex-end;
  align-self: flex-end;
}

.accept-button {
  background-color: #537ec5;
  padding: 0.7em 1.5em;
  font-size: 0.95rem;
  color: var(--clr-white);
  border-radius: 5px;
  box-shadow: 0px 10px 15px -6px rgba(0, 0, 0, 0.2);
  &:hover {
    background: var(--clr-dark-blue);
  }

  &[aria-hidden="true"] {
    display: none;
  }
}

	
	</style>
	<script>
	const terms = document.querySelector(".terms-and-conditions");
const termsLastElement = terms.lastElementChild;
const scrollToBottom = document.querySelector(".scroll-to-bottom");
const acceptButton = document.querySelector(".accept-button");

scrollToBottom.addEventListener("click", function(e) {
  termsLastElement.scrollIntoView({
    block: "start",
    behavior: "smooth",
    inline: "nearest"
  });
});

function obCallback(payload) {
  if (payload[0].isIntersecting) {
    scrollToBottom.setAttribute("aria-hidden", true);
    acceptButton.setAttribute("aria-hidden", false);
    observer.unobserve(termsLastElement);
  }
}

const observer = new IntersectionObserver(obCallback, { root: terms, threshold: 0.1 });

observer.observe(termsLastElement);

	
	</script>
	</html>