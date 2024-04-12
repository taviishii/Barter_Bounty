let products = {
    data: [
        {
            productName: "Pressure cooker",
            category: "Topwear",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../cooker.jpg",
        },
        {
            productName: "Crocery set",
            category: "Topwear",
            use: "Barely Used",
            con: "Excellent Conditon",
            image: "../crocery set.jpg",
        },
        {
            productName: "fridge",
            category: "Topwear",
            use: "Used",
            con: "Good Conditon",
            image: "../fridge.jpg",
        },
        {
            productName: "gas stove",
            category: "Topwear",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../gas stove.jpg",
        },
        {
            productName: "Bike",
            category: "Bottomwear",
            use: "Used for few months",
            con: "Good Conditon",
            image: "../bike.jpg",
        },
        {
            productName: "scooter",
            category: "Bottomwear",
            use: "Used",
            con: "Good Conditon",
            image: "../scooter.jpg",
        },
        {
            productName: "Bicycle",
            category: "Bottomwear",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../bicycle.jpg",
        },
        {
            productName: "Mobile",
            category: "Watch",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../mobile.png",
        },
        {
            productName: "window ac",
            category: "Watch",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../window ac.jpg",
        },
        {
            productName: "vaccum cleaner",
            category: "Watch",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../vaccum cleaner.jpg",
        },
        {
            productName: "cooler",
            category: "Watch",
            use: "Not Used",
            con: "Good Conditon",
            image: "../cooler.jpg",
        },
        {
            productName: "wooden table",
            category: "Jacket",
            use: "Used",
            con: "Good Conditon",
            image: "../table.jpg",
        },
        {
            productName: "television",
            category: "Watch",
            use: "Used",
            con: "Fine Conditon",
            image: "../television.JPG",
        },
        {
            productName: "sofa",
            category: "Jacket",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../sofa.jpg",
        },
        {
            productName: "frame",
            category: "Jacket",
            use: "Barely Used",
            con: "Good Conditon",
            image: "../frame.jpg",
        },

    ],
};
for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");
    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
    //price
    let use = document.createElement("h6");
    use.innerText = i.use;
    container.appendChild(use);
    card.appendChild(container);
    //condition
    let con = document.createElement("h6");
    con.innerText = i.con;
    container.appendChild(con);
    card.appendChild(container);
    //buttpn
    // Create a new button element
    var button = document.createElement("button");

    // Set button attributes
    button.innerHTML = "view"; // Button text
    button.id = "myButton"; // Button id
    button.className = "btn btn-primary"; // Button class

    // Append the button to a specific element in the document (e.g., body)
    container.appendChild(button);
    card.appendChild(container);
    //heart
    // Create a new button element
    var heartButton = document.createElement("button");

    // Set the content of the button to the heart symbol (♥)
    heartButton.innerHTML = "&#10084;";

    // Apply CSS class to the button
    heartButton.className = "heart-icon";

    // Set initial state (empty heart)
    var isHeartFilled = false;

    // Add click event listener to toggle heart state
    heartButton.addEventListener("click", function () {
        // Toggle heart state
        isHeartFilled = !isHeartFilled;

        // Update button content based on heart state
        if (isHeartFilled) {
            heartButton.innerHTML = "&#10084;"; // Filled heart
        } else {
            heartButton.innerHTML = "&#9825;"; // Empty heart
        }
    });

    // Append the heart button to a specific element in the document
   container.appendChild(heartButton);


    document.getElementById("products").appendChild(card);
}
//parameter passed from button (Parameter same as category)
function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
        //check if value equals innerText
        if (value.toUpperCase() == button.innerText.toUpperCase()) {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
        //display all cards on 'all' button click
        if (value == "all") {
            element.classList.remove("hide");
        } else {
            //Check if element contains category class
            if (element.classList.contains(value)) {
                //display element based on category
                element.classList.remove("hide");
            } else {
                //hide other elements
                element.classList.add("hide");
            }
        }
    });
}
//Search button click
document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
    //loop through all elements
    elements.forEach((element, index) => {
        //check if text includes the search value
        if (element.innerText.includes(searchInput.toUpperCase())) {
            //display matching card
            cards[index].classList.remove("hide");
        } else {
            //hide others
            cards[index].classList.add("hide");
        }
    });
});
//Initially display all products
window.onload = () => {
    filterProduct("all");
};