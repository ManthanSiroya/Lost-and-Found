
function submitLostItem() {

    const lostItem = {
        itemName: document.getElementById("lostItemName").value,
        category: getSelectedCategory(),
        description: document.getElementById("lostDescription").value,
        location: document.getElementById("lostLocation").value,
        date: document.getElementById("lostDate").value,
        userName: document.getElementById("lostUserName").value,
        email: document.getElementById("lostEmail").value,
        phone: document.getElementById("lostPhone").value
    };

   
    for (let key in lostItem) {
        if (!lostItem[key]) {
            alert("Please fill all fields");
            return;
        }
    }

    fetch("save_lost.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(lostItem)
    })
    .then(res => res.json())
    .then(data => {
    console.log("Response:", data);
    if (data.success === true) {
        window.location.replace("/ai_results.php");
    } else {
        alert(data.message || "Failed to save lost item");
    }
})
    .catch(err => {
        console.error(err);
        alert("Server error");
    });
}



function submitFoundItem() {

    let foundItem = {
        itemName: document.getElementById("foundItemName").value,
        category: getSelectedCategory(),
        description: document.getElementById("foundDescription").value,
        location: document.getElementById("foundLocation").value,
        date: document.getElementById("foundDate").value,
        userName: document.getElementById("foundUserName").value,
        email: document.getElementById("foundEmail").value,
        phone: document.getElementById("foundPhone").value
    };

    if (!validateItem(foundItem)) return;

    fetch("save_found.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(foundItem)
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert("Found item saved successfully!");
            window.location.href = "index.php"; 
        } else {
            alert(data.message);
        }
    })
    .catch(err => {
        console.error(err);
        alert("Server error");
    });
}

function getSelectedCategory() {
    let categories = document.getElementsByName("category");
    for (let i = 0; i < categories.length; i++) {
        if (categories[i].checked) {
            return categories[i].value;
        }
    }
    return "";
}

function validateItem(item) {
    for (let key in item) {
        if (key === "type") continue;
        if (item[key] === "") {
            alert("Please fill all required fields");
            return false;
        }
    }
    return true;
}



function loadMatches() {
    let container = document.getElementById("itemsContainer");
    container.innerHTML = "";

   fetch("get_matches.php")
        .then(res => res.json())
        .then(matches => {

            if (matches.length === 0) {
                container.innerHTML = "<p style='text-align:center'>No matches found yet.</p>";
                return;
            }

            matches.forEach(match => {
                container.innerHTML += `
                    <div class="home-card lost-card">
                        <h3>Lost Item</h3>
                        <p><strong>Item:</strong> ${match.lostItem}</p>
                        <p><strong>Category:</strong> ${match.category}</p>
                        <p><strong>Location:</strong> ${match.location}</p>
                        <p><strong>Contact:</strong> ${match.lostPhone}</p>
                    </div>

                    <div class="home-card found-card">
                        <h3>Found Item</h3>
                        <p><strong>Item:</strong> ${match.foundItem}</p>
                        <p><strong>Category:</strong> ${match.category}</p>
                        <p><strong>Location:</strong> ${match.location}</p>
                        <p><strong>Contact:</strong> ${match.foundPhone}</p>
                    </div>
                `;
            });
        });
}