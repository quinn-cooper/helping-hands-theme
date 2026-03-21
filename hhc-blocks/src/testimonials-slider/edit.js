import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, PanelRow, ToggleControl } from '@wordpress/components';
import { ServerSideRender } from '@wordpress/server-side-render';
import { SwiperInit } from './swiper-init';
import { PanelColorSettings } from '@wordpress/block-editor';

export default function Edit({ attributes, setAttributes }) {
    const { navigation, pagination, arrowColor } = attributes;

    const swiper = SwiperInit('.swiper', { navigation, pagination });

    // destructure the attribute
    const styles = {
        "--arrow-color": arrowColor
    };

	const onChangeArrowColor = ( value ) => {
		setAttributes( { arrowColor: value } );
	}

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Settings', 'testimonials-slider')}>
                    <PanelRow>
                        <ToggleControl
                            label={__('Navigation', 'testimonials-slider')}
                            checked={navigation}
                            onChange={(value) =>
                                setAttributes({ navigation: value })
                            }
                            help={__('Navigation will display arrows so users can navigate forward and backward.', 'testimonials-slider')}
                        />
                    </PanelRow>
                    <PanelRow>
                        <ToggleControl
                            label={__('Pagination', 'testimonials-slider')}
                            checked={pagination}
                            onChange={(value) =>
                                setAttributes({ pagination: value })
                            }
                            help={__('Pagination will display dots so users can navigate to any slide.', 'testimonials-slider')}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
            <div {...useBlockProps({style: styles})}>
                <ServerSideRender
                    block="hhc-blocks/testimonials-slider"
                    attributes={attributes}
                    />
            </div>

            <PanelColorSettings
                title={__('Arrow settings')}
                colorSettings={[
                    {
                        value: arrowColor,
                        onChange: onChangeArrowColor,
                        label: __('Arrow color'),
                    }
                ]}
            />
        </>
    );
}
