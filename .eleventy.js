module.exports = function(eleventyConfig) {
    eleventyConfig.addPassthroughCopy('./src/style.css');
    eleventyConfig.addPassthroughCopy('./src/admin');
    eleventyConfig.addPassthroughCopy('./src/contactform.php');

    eleventyConfig.addPassthroughCopy('./src/img');
    eleventyConfig.addPassthroughCopy('./src/fonts');
    eleventyConfig.addPassthroughCopy('./src/scripts');
    
    return {
        dir: {
            input: "src",
            output: "public"
        }
    };
}