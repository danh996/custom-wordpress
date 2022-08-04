wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
	title: "Are You Paying Attenttion?",
	icon: "smiley",
	category: "common",
	edit: function(){
		return (
			<div>
				<h1>This is a H1</h1>
				<h4 style={{color: 'skyblue'}}>This is a H4</h4>
			</div>
		)
	},
	save: function(){
		return(
            <>
                <h3>H3 on the front end</h3>
                <h5>H5 on the front end</h5>
            </>
        )
	}
});