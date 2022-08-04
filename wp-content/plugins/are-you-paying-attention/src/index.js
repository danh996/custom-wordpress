wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
	title: "Are You Paying Attenttion?",
	icon: "smiley",
	category: "common",
	attributes: {
		skyColor: {type: "string"},
		grassColor: {type: "string"},
	},
	edit: function(props){
		function updateSkyColor(event){
			props.setAttributes({skyColor: event.target.value});
		}

		function updateGrassColor(event){
			props.setAttributes({grassColor: event.target.value});
		}

		return (
			<div>
				<input type="text" placeholder="sky color" value={props.attributes.skyColor} onChange={updateSkyColor}></input>
				<input type="text" placeholder="grass color" value={props.attributes.grassColor} onChange={updateGrassColor}></input>
			</div>
		)
	},
	save: function(props){
		return(
        	<p>To day the sky is {props.attributes.skyColor} and grass is {props.attributes.grassColor} </p>
        )
	}
});