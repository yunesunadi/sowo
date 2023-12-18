const favoriteBtns = document.querySelectorAll(".favorite-btn");

favoriteBtns.forEach((favoriteBtn) => {
	const uid = favoriteBtn.dataset.uid;
	const iid = favoriteBtn.dataset.iid;

	favoriteBtn.addEventListener("click", async () => {
		const newStatus = favoriteBtn.dataset.status === "on" ? "off" : "on";
		favoriteBtn.dataset.status = newStatus;

		try {
			const response = await fetch("add-to-favorite.php", {
				method: "POST",
				headers: {
					"Content-Type": "application/json",
				},
				body: JSON.stringify({ uid, iid, status: newStatus }),
			});

			if (response.status === 200) {
				favoriteBtn.innerHTML = favoriteBtn.dataset.status === "on" ? '<i class="bi bi-heart-fill" style="cursor: pointer"></i>' : '<i class="bi bi-heart" style="cursor: pointer"></i>';
			}
		} catch (err) {
			console.log(err);
		}
	});
});