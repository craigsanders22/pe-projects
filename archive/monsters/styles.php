<style>


	img {
		display: block;
		width: 100%;
		max-height: 300px;
		
		overflow: hidden;

	}

	

	.inner-column {
		max-width: 1000px;
		padding: 20px;
		margin-left: auto;
		margin-right: auto;
		
	}

	ul {
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		grid-auto-rows: 1fr;
		grid-gap: 1em;
		height: 100%;
		padding: 10px;
		margin-right: auto;
		margin-left: auto;
		list-style: none;
	


	}

	@media (max-width: 700px) {
	ul {
		grid-template-columns: 1fr;
		padding: 10px;
	}
}


	monster-card {
		display: flex;
		flex-direction: column;
		justify-content: center;
		border: 10px solid transparent;
  		border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  		border-image-slice: 1;
		padding: 20px;
		height: 500px;
	}

	@media (max-width:600px) {
		monster-card {
			align-content: center;
		}
	}

	


</style>
