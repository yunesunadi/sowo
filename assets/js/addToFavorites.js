const favoriteBtns = document.querySelectorAll(".favorite-btn");
let arr = JSON.parse(localStorage.getItem("favorite")) || [];

favoriteBtns.forEach((favoriteBtn) => {
	const uid = favoriteBtn.dataset.uid;
	const iid = favoriteBtn.dataset.iid;

	arr.push({ uid, iid, action: "yes" });

	localStorage.setItem("favorite", JSON.stringify(arr));

	const action = arr.filter((item) => item.uid === uid && item.iid === iid)[0]
		.action;
	console.log(action);

	if (action === "yes") {
		favoriteBtn.innerHTML =
			'<i class="bi bi-heart" style="cursor: pointer"></i>';
		favoriteBtn.addEventListener("click", async () => {
			await fetch("add-to-favorite.php", {
				method: "POST",
				headers: {
					"Content-Type": "application/json",
				},
				body: JSON.stringify({ uid, iid }),
			});
			favoriteBtn.innerHTML =
				'<i class="bi bi-heart-fill" style="cursor: pointer"></i>';
			const uarr = arr.map((item) =>
				item.uid === uid && item.iid === iid
					? {
							...item,
							action: "no",
					  }
					: item
			);
			localStorage.setItem("favorite", JSON.stringify(uarr));
		});
	} else {
		favoriteBtn.innerHTML =
			'<i class="bi bi-heart-fill" style="cursor: pointer"></i>';
		favoriteBtn.addEventListener("click", async () => {
			await fetch("remove-from-favorite.php", {
				method: "DELETE",
				headers: {
					"Content-Type": "application/json",
				},
				body: JSON.stringify({ uid, iid }),
			});
			favoriteBtn.innerHTML =
				'<i class="bi bi-heart" style="cursor: pointer"></i>';
			const uarr = arr.map((item) =>
				item.uid === uid && item.iid === iid
					? {
							...item,
							action: "yes",
					  }
					: item
			);
			localStorage.setItem("favorite", JSON.stringify(uarr));
		});
	}
});
