wp.blocks.registerBlockType("ourplugin/are-you-paying-attention", {
	title: "Are You Paying Attenttion?",
	icon: "smiley",
	category: "common",
	edit: function(){
		return wp.element.createElement("h3", null, "Hello, this is from the admin")
	},
	save: function(){
		return wp.element.createElement("h1", null, "Hello, this is the frontend")
	}
});