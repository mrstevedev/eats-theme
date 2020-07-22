import "./editor.scss";
import "./style.scss";

const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { Component } = wp.element;
const { apiFetch } = wp;
import Moment from 'moment';

registerBlockType("cgb/block-eats-latest-post-block", {
	title: __("eats-blocks - Latest Post Block"),
	icon: "shield",
	category: "common",
	keywords: [
		__("eats-blocks — CGB Block"),
		__("create-guten-block"),
	],
	attributes: {
		featuredImg: {
			type: "string",
        },
        date: {
            type: 'string'
        },
        title: {
            type: 'string'
        },
        link: {
            type: 'string'
        },
        content: {
            type: 'string'
        },
        formattedDate: {
            type: 'string'
        }
	},

	edit: class extends Component {
		constructor() {
			super(...arguments);
		}
        
        componentDidMount() {
            
            apiFetch({ path: '/wp/v2/posts' }).then(res => {
                
                const latestPost = res[0];
                const date = latestPost.date;
                const title = latestPost.title.rendered;
                const content = latestPost.content.rendered;
                const link = latestPost.link;
                const formattedDate = Moment(date).format('MMMM D, YYYY');

                this.props.setAttributes({ formattedDate });
                this.props.setAttributes({ title });
                this.props.setAttributes({ content });
                this.props.setAttributes({ link });

                apiFetch({ path: `/wp/v2/posts/${ latestPost.id }?_embed` }).then(res => {
                    const featuredImgUrl = res._embedded["wp:featuredmedia"][0].source_url;
                    this.props.setAttributes({ featuredImg: featuredImgUrl });
                });
            });
        }
		render() {
            const { 
                formattedDate, 
                title, 
                link, 
                content, 
                featuredImg 
            } = this.props.attributes;
			return (
				<div className="eats__block--main">
					<div className="eats__block--featured-img">
                        <img src={ featuredImg } />
                    </div>
					<div className="eats__block--latest-post">
                        <div className="eats__block--date">{ formattedDate }</div>
                        <div className="eats__block--heading-title"><a href={ link }>{ title }</a></div>
                        <div className="eats__block--content" dangerouslySetInnerHTML={{ __html:  content }} />
                        <div className="eats__block--read-more">
                            <p><a href={ link }>Read More</a> <span class="dashicons dashicons-arrow-right-alt2"></span></p>
                        </div>
                    </div>
				</div>
			);
		}
	},

	save: (props) => {
        const { 
            formattedDate, 
            title, 
            link, 
            content, 
            featuredImg 
        } = props.attributes;
		return (
			<div className="eats__block--main">
				<div className="eats__block--featured-img">
                    <img src={ featuredImg } />
                </div>
				<div className="eats__block--latest-post">
                    <div className="eats__block--date">{ formattedDate }</div>
                    <div className="eats__block--heading-title">
                        <h1>
                            <a href={ link }>
                                { title }
                            </a>
                        </h1>                   
                    </div>
                    <div className="eats__block--content" dangerouslySetInnerHTML={{ __html: content }} />
                    <div className="eats__block--read-more">
                        <p><a href={ link }>Read More</a> <span class="dashicons dashicons-arrow-right-alt2"></span></p>
                    </div>
                </div>
			</div>
		);
	},
});
