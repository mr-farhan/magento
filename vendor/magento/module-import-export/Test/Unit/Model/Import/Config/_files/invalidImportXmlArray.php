<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

return [
    'entity_same_name_attribute_value' => [
        '<?xml version="1.0"?><config><entity name="same_name"/><entity name="same_name"/></config>',
        [
            "Element 'entity': Duplicate key-sequence ['same_name'] in unique identity-constraint " .
            "'uniqueEntityName'.\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><entity name=\"same_name\"/><entity name=\"same_name\"/></config>\n2:\n"
        ],
    ],
    'entity_without_required_name_attribute' => [
        '<?xml version="1.0"?><config><entity /></config>',
        [
            "Element 'entity': The attribute 'name' is required but missing.\nLine: 1\nThe xml was: \n" .
            "0:<?xml version=\"1.0\"?>\n1:<config><entity/></config>\n2:\n"
        ],
    ],
    'entity_with_invalid_model_value' => [
        '<?xml version="1.0"?><config><entity name="some_name" model="12345"/></config>',
        [
            "Element 'entity', attribute 'model': '12345' is not a valid value of the atomic type 'modelName'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><entity name=\"some_name\" " .
            "model=\"12345\"/></config>\n2:\n"

        ],
    ],
    'entity_with_invalid_behaviormodel_value' => [
        '<?xml version="1.0"?><config><entity name="some_name" behaviorModel="=--09"/></config>',
        [
            "Element 'entity', attribute 'behaviorModel': '=--09' is not a valid value of the atomic type " .
            "'modelName'.\nLine: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><entity " .
            "name=\"some_name\" behaviorModel=\"=--09\"/></config>\n2:\n"
        ],
    ],
    'entity_with_notallowed_attribute' => [
        '<?xml version="1.0"?><config><entity name="some_name" notallowd="aasd"/></config>',
        [
            "Element 'entity', attribute 'notallowd': The attribute 'notallowd' is not allowed.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><entity name=\"some_name\" notallowd=\"aasd\"/></config>\n2:\n"
        ],
    ],
    'entitytype_without_required_name_attribute' => [
        '<?xml version="1.0"?><config><entityType entity="entity_name" model="model_name" /></config>',
        [
            "Element 'entityType': The attribute 'name' is required but missing.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><entityType entity=\"entity_name\" model=\"model_name\"/></config>\n2:\n"
        ],
    ],
    'entitytype_without_required_model_attribute' => [
        '<?xml version="1.0"?><config><entityType entity="entity_name" name="some_name" /></config>',
        [
            "Element 'entityType': The attribute 'model' is required but missing.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><entityType entity=\"entity_name\" name=\"some_name\"/></config>\n2:\n"
        ],
    ],
    'entitytype_with_invalid_model_attribute_value' => [
        '<?xml version="1.0"?><config><entityType entity="entity_name" name="some_name" model="1test"/></config>',
        [
            "Element 'entityType', attribute 'model': '1test' is not a valid value of the atomic type 'modelName'.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n" .
            "1:<config><entityType entity=\"entity_name\" name=\"some_name\" model=\"1test\"/></config>\n2:\n"
        ],
    ],
    'entitytype_with_notallowed' => [
        '<?xml version="1.0"?><config><entityType entity="entity_name" name="some_name" '
            . 'model="test" notallowed="test"/></config>',
        [
            "Element 'entityType', attribute 'notallowed': The attribute 'notallowed' is not allowed.\n" .
            "Line: 1\nThe xml was: \n0:<?xml version=\"1.0\"?>\n1:<config><entityType entity=\"entity_name\" " .
            "name=\"some_name\" model=\"test\" notallowed=\"test\"/></config>\n2:\n"
        ],
    ]
];
