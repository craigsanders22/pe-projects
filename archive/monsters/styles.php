<style>


	img {
		display: block;
		width: 100%;
		height: auto;
		max-width: 400px;
		overflow: hidden;
	}

	.inner-column {
		max-width: 700px;
		padding: 20px;
		margin-left: auto;
		margin-right: auto;
		
	}

	ul {

		
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
		grid-gap: 1em;
		max-height: 500px;
		margin-right: auto;
		margin-left: auto;
		list-style-type: none;


	}


	monster-card {
		display: flex;
		flex-direction: column;
		justify-content: center;
		border: 10px solid transparent;
  		border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, #b8fd33 50%, #fec837 75%, #fd1892 100%);
  		border-image-slice: 1;
		padding: 20px;
	}

	


</style>
