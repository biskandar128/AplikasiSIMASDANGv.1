"use strict";

$("#zero_config").DataTable();

class App {
	constructor() {
		this.productItem();
		this.contentProduct();
		this.aboutContent();
	}

	productItem() {
		// const dataUpdateProduct = document.querySelector(".btn-update-produk");
		const dataUpdateProduct = document.getElementById("modalUbahProduk");

		// Guard clause
		if (!dataUpdateProduct) return;

		dataUpdateProduct.addEventListener("show.bs.modal", function (e) {
			let btnUpdate = e.relatedTarget;

			const colProdukId = document.getElementById("produkId_ubah");
			const colNama = document.getElementById("nama_ubah");
			const colVarian = document.getElementById("varian_ubah");
			const colBerat = document.getElementById("berat_ubah");
			const colHarga = document.getElementById("harga_ubah");

			colProdukId.value = btnUpdate.getAttribute("data-goods-id");
			colNama.value = btnUpdate.getAttribute("data-nama-barang");
			colVarian.value = btnUpdate.getAttribute("data-varian");
			colBerat.value = btnUpdate.getAttribute("data-berat");
			colHarga.value = btnUpdate.getAttribute("data-harga");
		});
	}

	contentProduct() {
		const dataUpdateContentProduct = document.getElementById(
			"modalUbahKontenProduk"
		);

		// Guard clause
		if (!dataUpdateContentProduct) return;

		dataUpdateContentProduct.addEventListener("show.bs.modal", function (e) {
			const btnUpdate = e.relatedTarget;

			const colContentId = document.getElementById("kontenId_ubah");
			const colDeskripsi = document.getElementById("deskripsiKonten_ubah");
			const colProdukImg = document.getElementById("kontenProduk_img_ubah");
			const colStatus = document.getElementById("status_ubah");
			const colOldImg = document.getElementById("old_img");
			// const colProdukId = document.getElementById("produkId_ubah");

			colContentId.value = btnUpdate.getAttribute("data-content-id");
			colDeskripsi.value = btnUpdate.getAttribute("data-deskripsi");
			colProdukImg.src = `../upload/konten_produk/${btnUpdate.getAttribute(
				"data-goods-img"
			)}`;
			colStatus.value = btnUpdate.getAttribute("data-status");
			colOldImg.value = btnUpdate.getAttribute("data-goods-img");
		});
	}

	accountProfile() {
		const dataAccountProfile = document.getElementById("modalAccountProfile");
	}

	aboutContent() {
		const dataUpdateAboutContent = document.getElementById("modalUbahAbout");

		if (!dataUpdateAboutContent) return;

		dataUpdateAboutContent.addEventListener("show.bs.modal", function (e) {
			const btnUpdate = e.relatedTarget;

			const colAboutId = document.getElementById("about_id");
			const colAboutDesc = document.getElementById("about_desc");
			const colShowImg = document.getElementById("about_img_ubah");
			const colOldImg = document.getElementById("old_img");

			colAboutId.value = btnUpdate.getAttribute("data-about-id");
			colAboutDesc.value = btnUpdate.getAttribute("data-about-desc");
			colShowImg.src = `../upload/konten_about/${btnUpdate.getAttribute(
				"data-about-img"
			)}`;
			colOldImg.value = btnUpdate.getAttribute("data-about-img");
		});
	}
}

const simasdang = new App();
