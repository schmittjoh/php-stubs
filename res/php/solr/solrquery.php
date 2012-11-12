<?php

/** @phpstub */
class SolrQuery extends \SolrModifiableParams implements \Serializable
{
    const FACET_SORT_COUNT = 1;
    const FACET_SORT_INDEX = 0;
    const ORDER_ASC = 0;
    const ORDER_DESC = 1;
    const TERMS_SORT_COUNT = 1;
    const TERMS_SORT_INDEX = 0;

    /**
     * Constructor
     *
     * @param string $q
     */
    public function __construct($q = NULL)
    {
    }

    /**
     * Destructor
     *
     * @return void None.
     */
    public function __destruct()
    {
    }

    /**
     * Maps to facet.date
     *
     * @param string $dateField
     *
     * @return SolrQuery Returns a SolrQuery object.
     */
    public function addFacetDateField($dateField)
    {
    }

    /**
     * Adds another facet.date.other parameter
     *
     * @param string $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addFacetDateOther($value, $field_override = NULL)
    {
    }

    /**
     * Adds another field to the facet
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addFacetField($field)
    {
    }

    /**
     * Adds a facet query
     *
     * @param string $facetQuery
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addFacetQuery($facetQuery)
    {
    }

    /**
     * Specifies which fields to return in the result
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object
     */
    public function addField($field)
    {
    }

    /**
     * Specifies a filter query
     *
     * @param string $fq
     *
     * @return SolrQuery Returns the current SolrQuery object.
     */
    public function addFilterQuery($fq)
    {
    }

    /**
     * Maps to hl.fl
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addHighlightField($field)
    {
    }

    /**
     * Sets a field to use for similarity
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addMltField($field)
    {
    }

    /**
     * Maps to mlt.qf
     *
     * @param string $field
     * @param float $boost
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addMltQueryField($field, $boost)
    {
    }

    /**
     * Used to control how the results should be sorted
     *
     * @param string $field
     * @param int $order
     *
     * @return SolrQuery Returns the current SolrQuery object.
     */
    public function addSortField($field, $order = false)
    {
    }

    /**
     * Requests a return of sub results for values within the given facet 
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addStatsFacet($field)
    {
    }

    /**
     * Maps to stats.field parameter
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function addStatsField($field)
    {
    }

    /**
     * Returns the value of the facet parameter
     *
     * @return bool Returns a boolean on success and null if not set
     */
    public function getFacet()
    {
    }

    /**
     * Returns the value for the facet.date.end parameter
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set
     */
    public function getFacetDateEnd($field_override = NULL)
    {
    }

    /**
     * Returns all the facet.date fields
     *
     * @return array Returns all the facet.date fields as an array or null if none was set
     */
    public function getFacetDateFields()
    {
    }

    /**
     * Returns the value of the facet.date.gap parameter
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set
     */
    public function getFacetDateGap($field_override = NULL)
    {
    }

    /**
     * Returns the value of the facet.date.hardend parameter
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set
     */
    public function getFacetDateHardEnd($field_override = NULL)
    {
    }

    /**
     * Returns the value for the facet.date.other parameter
     *
     * @param string $field_override
     *
     * @return array Returns a string on success and null if not set.
     */
    public function getFacetDateOther($field_override = NULL)
    {
    }

    /**
     * Returns the  lower bound for the first date range for all date faceting on this field
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set
     */
    public function getFacetDateStart($field_override = NULL)
    {
    }

    /**
     * Returns all the facet fields
     *
     * @return array Returns an array of all the fields and null if none was set
     */
    public function getFacetFields()
    {
    }

    /**
     * Returns the maximum number of constraint counts that should be returned for the facet fields
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success and null if not set
     */
    public function getFacetLimit($field_override = NULL)
    {
    }

    /**
     * Returns the value of the facet.method parameter
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set
     */
    public function getFacetMethod($field_override = NULL)
    {
    }

    /**
     * Returns the minimum counts for facet fields should be included in the response
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success and null if not set
     */
    public function getFacetMinCount($field_override = NULL)
    {
    }

    /**
     * Returns the current state of the facet.missing parameter
     *
     * @param string $field_override
     *
     * @return bool Returns a boolean on success and null if not set
     */
    public function getFacetMissing($field_override = NULL)
    {
    }

    /**
     * Returns an offset into the list of constraints to be used for pagination
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success and null if not set
     */
    public function getFacetOffset($field_override = NULL)
    {
    }

    /**
     * Returns the facet prefix
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getFacetPrefix($field_override = NULL)
    {
    }

    /**
     * Returns all the facet queries
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getFacetQueries()
    {
    }

    /**
     * Returns the facet sort type
     *
     * @param string $field_override
     *
     * @return int Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or null if not set.
     */
    public function getFacetSort($field_override = NULL)
    {
    }

    /**
     * Returns the list of fields that will be returned in the response
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getFields()
    {
    }

    /**
     * Returns an array of filter queries
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getFilterQueries()
    {
    }

    /**
     * Returns the state of the hl parameter
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getHighlight()
    {
    }

    /**
     * Returns the highlight field to use as backup or default
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightAlternateField($field_override = NULL)
    {
    }

    /**
     * Returns all the fields that Solr should generate highlighted snippets for
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getHighlightFields()
    {
    }

    /**
     * Returns the formatter for the highlighted output
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightFormatter($field_override = NULL)
    {
    }

    /**
     * Returns the text snippet generator for highlighted text
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightFragmenter($field_override = NULL)
    {
    }

    /**
     * Returns the number of characters of fragments to consider for highlighting
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success or null if not set.
     */
    public function getHighlightFragsize($field_override = NULL)
    {
    }

    /**
     * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getHighlightHighlightMultiTerm()
    {
    }

    /**
     * Returns the maximum number of characters of the field to return
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getHighlightMaxAlternateFieldLength($field_override = NULL)
    {
    }

    /**
     * Returns the maximum number of characters into a document to look for suitable snippets
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getHighlightMaxAnalyzedChars()
    {
    }

    /**
     * Returns whether or not the collapse contiguous fragments into a single fragment
     *
     * @param string $field_override
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getHighlightMergeContiguous($field_override = NULL)
    {
    }

    /**
     * Returns the maximum number of characters from a field when using the regex fragmenter
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getHighlightRegexMaxAnalyzedChars()
    {
    }

    /**
     * Returns the regular expression for fragmenting
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightRegexPattern()
    {
    }

    /**
     * Returns the deviation factor from the ideal fragment size
     *
     * @return float Returns a double on success and null if not set.
     */
    public function getHighlightRegexSlop()
    {
    }

    /**
     * Returns if a field will only be highlighted if the query matched in this particular field
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getHighlightRequireFieldMatch()
    {
    }

    /**
     * Returns the text which appears after a highlighted term
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightSimplePost($field_override = NULL)
    {
    }

    /**
     * Returns the text which appears before a highlighted term
     *
     * @param string $field_override
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getHighlightSimplePre($field_override = NULL)
    {
    }

    /**
     * Returns the maximum number of highlighted snippets to generate per field
     *
     * @param string $field_override
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getHighlightSnippets($field_override = NULL)
    {
    }

    /**
     * Returns the state of the hl.usePhraseHighlighter parameter
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getHighlightUsePhraseHighlighter()
    {
    }

    /**
     * Returns whether or not MoreLikeThis results should be enabled
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getMlt()
    {
    }

    /**
     * Returns whether or not the query will be boosted by the interesting term relevance
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getMltBoost()
    {
    }

    /**
     * Returns the number of similar documents to return for each result
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltCount()
    {
    }

    /**
     * Returns all the fields to use for similarity
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getMltFields()
    {
    }

    /**
     * Returns the maximum number of query terms that will be included in any generated query
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMaxNumQueryTerms()
    {
    }

    /**
     * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMaxNumTokens()
    {
    }

    /**
     *  Returns the maximum word length above which words will be ignored
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMaxWordLength()
    {
    }

    /**
     * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMinDocFrequency()
    {
    }

    /**
     * Returns the frequency below which terms will be ignored in the source document
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMinTermFrequency()
    {
    }

    /**
     * Returns the minimum word length below which words will be ignored
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getMltMinWordLength()
    {
    }

    /**
     * Returns the query fields and their boosts
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getMltQueryFields()
    {
    }

    /**
     * Returns the main query
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getQuery()
    {
    }

    /**
     * Returns the maximum number of documents
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getRows()
    {
    }

    /**
     * Returns all the sort fields
     *
     * @return array Returns an array on success and null if none of the parameters was set.
     */
    public function getSortFields()
    {
    }

    /**
     * Returns the offset in the complete result set 
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getStart()
    {
    }

    /**
     * Returns whether or not stats is enabled
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getStats()
    {
    }

    /**
     * Returns all the stats facets that were set
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getStatsFacets()
    {
    }

    /**
     * Returns all the statistics fields
     *
     * @return array Returns an array on success and null if not set.
     */
    public function getStatsFields()
    {
    }

    /**
     * Returns whether or not the TermsComponent is enabled
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getTerms()
    {
    }

    /**
     * Returns the field from which the terms are retrieved
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getTermsField()
    {
    }

    /**
     * Returns whether or not to include the lower bound in the result set
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getTermsIncludeLowerBound()
    {
    }

    /**
     * Returns whether or not to include the upper bound term in the result set
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getTermsIncludeUpperBound()
    {
    }

    /**
     * Returns the maximum number of terms Solr should return
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getTermsLimit()
    {
    }

    /**
     * Returns the term to start at
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getTermsLowerBound()
    {
    }

    /**
     * Returns the maximum document frequency
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getTermsMaxCount()
    {
    }

    /**
     * Returns the minimum document frequency to return in order to be included
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getTermsMinCount()
    {
    }

    /**
     * Returns the term prefix
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getTermsPrefix()
    {
    }

    /**
     * Whether or not to return raw characters
     *
     * @return bool Returns a boolean on success and null if not set.
     */
    public function getTermsReturnRaw()
    {
    }

    /**
     * Returns an integer indicating how terms are sorted
     *
     * @return int Returns an integer on success and null if not set.
     */
    public function getTermsSort()
    {
    }

    /**
     * Returns the term to stop at
     *
     * @return string Returns a string on success and null if not set.
     */
    public function getTermsUpperBound()
    {
    }

    /**
     * Returns the time in milliseconds allowed for the query to finish
     *
     * @return int Returns and integer on success and null if it is not set.
     */
    public function getTimeAllowed()
    {
    }

    /**
     * Removes one of the facet date fields
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeFacetDateField($field)
    {
    }

    /**
     * Removes one of the facet.date.other parameters
     *
     * @param string $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeFacetDateOther($value, $field_override = NULL)
    {
    }

    /**
     * Removes one of the facet.date parameters
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeFacetField($field)
    {
    }

    /**
     * Removes one of the facet.query parameters
     *
     * @param string $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeFacetQuery($value)
    {
    }

    /**
     * Removes a field from the list of fields
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeField($field)
    {
    }

    /**
     * Removes a filter query
     *
     * @param string $fq
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeFilterQuery($fq)
    {
    }

    /**
     * Removes one of the fields used for highlighting
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeHighlightField($field)
    {
    }

    /**
     * Removes one of the moreLikeThis fields
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeMltField($field)
    {
    }

    /**
     * Removes one of the moreLikeThis query fields
     *
     * @param string $queryField
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeMltQueryField($queryField)
    {
    }

    /**
     * Removes one of the sort fields
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeSortField($field)
    {
    }

    /**
     * Removes one of the stats.facet parameters
     *
     * @param string $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeStatsFacet($value)
    {
    }

    /**
     * Removes one of the stats.field parameters
     *
     * @param string $field
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function removeStatsField($field)
    {
    }

    /**
     * Toggles the echoHandler parameter
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setEchoHandler($flag)
    {
    }

    /**
     * Determines what kind of parameters to include in the response
     *
     * @param string $type
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setEchoParams($type)
    {
    }

    /**
     * Sets the explainOther common query parameter
     *
     * @param string $query
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setExplainOther($query)
    {
    }

    /**
     * Maps to the facet parameter. Enables or disables facetting
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacet($flag)
    {
    }

    /**
     * Maps to facet.date.end
     *
     * @param string $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetDateEnd($value, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.date.gap
     *
     * @param string $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetDateGap($value, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.date.hardend
     *
     * @param bool $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetDateHardEnd($value, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.date.start
     *
     * @param string $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetDateStart($value, $field_override = NULL)
    {
    }

    /**
     * Sets the minimum document frequency used for determining term count
     *
     * @param int $frequency
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetEnumCacheMinDefaultFrequency($frequency, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.limit
     *
     * @param int $limit
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetLimit($limit, $field_override = NULL)
    {
    }

    /**
     * Specifies the type of algorithm to use when faceting a field
     *
     * @param string $method
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetMethod($method, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.mincount
     *
     * @param int $mincount
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetMinCount($mincount, $field_override = NULL)
    {
    }

    /**
     * Maps to facet.missing
     *
     * @param bool $flag
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetMissing($flag, $field_override = NULL)
    {
    }

    /**
     * Sets the offset into the list of constraints to allow for pagination
     *
     * @param int $offset
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetOffset($offset, $field_override = NULL)
    {
    }

    /**
     * Specifies a string prefix with which to limits the terms on which to facet
     *
     * @param string $prefix
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetPrefix($prefix, $field_override = NULL)
    {
    }

    /**
     * Determines the ordering of the facet field constraints
     *
     * @param int $facetSort
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setFacetSort($facetSort, $field_override = NULL)
    {
    }

    /**
     * Enables or disables highlighting
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlight($flag)
    {
    }

    /**
     * Specifies the backup field to use
     *
     * @param string $field
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightAlternateField($field, $field_override = NULL)
    {
    }

    /**
     * Specify a formatter for the highlight output
     *
     * @param string $formatter
     * @param string $field_override
     *
     * @return SolrQuery
     */
    public function setHighlightFormatter($formatter, $field_override = NULL)
    {
    }

    /**
     * Sets a text snippet generator for highlighted text
     *
     * @param string $fragmenter
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightFragmenter($fragmenter, $field_override = NULL)
    {
    }

    /**
     * The size of fragments to consider for highlighting
     *
     * @param int $size
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightFragsize($size, $field_override = NULL)
    {
    }

    /**
     * Use SpanScorer to highlight phrase terms
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightHighlightMultiTerm($flag)
    {
    }

    /**
     * Sets the maximum number of characters of the field to return
     *
     * @param int $fieldLength
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightMaxAlternateFieldLength($fieldLength, $field_override = NULL)
    {
    }

    /**
     * Specifies the number of characters into a document to look for suitable snippets
     *
     * @param int $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightMaxAnalyzedChars($value)
    {
    }

    /**
     * Whether or not to collapse contiguous fragments into a single fragment
     *
     * @param bool $flag
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightMergeContiguous($flag, $field_override = NULL)
    {
    }

    /**
     * Specify the maximum number of characters to analyze
     *
     * @param int $maxAnalyzedChars
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars)
    {
    }

    /**
     * Specify the regular expression for fragmenting
     *
     * @param string $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightRegexPattern($value)
    {
    }

    /**
     * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
     *
     * @param float $factor
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightRegexSlop($factor)
    {
    }

    /**
     * Require field matching during highlighting
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightRequireFieldMatch($flag)
    {
    }

    /**
     * Sets the text which appears after a highlighted term
     *
     * @param string $simplePost
     * @param string $field_override
     *
     * @return SolrQuery
     */
    public function setHighlightSimplePost($simplePost, $field_override = NULL)
    {
    }

    /**
     * Sets the text which appears before a highlighted term
     *
     * @param string $simplePre
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightSimplePre($simplePre, $field_override = NULL)
    {
    }

    /**
     * Sets the maximum number of highlighted snippets to generate per field
     *
     * @param int $value
     * @param string $field_override
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightSnippets($value, $field_override = NULL)
    {
    }

    /**
     * Whether to highlight phrase terms only when they appear within the query phrase
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setHighlightUsePhraseHighlighter($flag)
    {
    }

    /**
     * Enables or disables moreLikeThis
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMlt($flag)
    {
    }

    /**
     * Set if the query will be boosted by the interesting term relevance
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltBoost($flag)
    {
    }

    /**
     * Set the number of similar documents to return for each result
     *
     * @param int $count
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltCount($count)
    {
    }

    /**
     * Sets the maximum number of query terms included
     *
     * @param int $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMaxNumQueryTerms($value)
    {
    }

    /**
     * Specifies the maximum number of tokens to parse
     *
     * @param int $value
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMaxNumTokens($value)
    {
    }

    /**
     * Sets the maximum word length
     *
     * @param int $maxWordLength
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMaxWordLength($maxWordLength)
    {
    }

    /**
     * Sets the mltMinDoc frequency
     *
     * @param int $minDocFrequency
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMinDocFrequency($minDocFrequency)
    {
    }

    /**
     * Sets the frequency below which terms will be ignored in the source docs
     *
     * @param int $minTermFrequency
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMinTermFrequency($minTermFrequency)
    {
    }

    /**
     * Sets the minimum word length
     *
     * @param int $minWordLength
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setMltMinWordLength($minWordLength)
    {
    }

    /**
     * Exclude the header from the returned results
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setOmitHeader($flag)
    {
    }

    /**
     * Sets the search query
     *
     * @param string $query
     *
     * @return SolrQuery Returns the current SolrQuery object
     */
    public function setQuery($query)
    {
    }

    /**
     * Specifies the maximum number of rows to return in the result
     *
     * @param int $rows
     *
     * @return SolrQuery Returns the current SolrQuery object.
     */
    public function setRows($rows)
    {
    }

    /**
     * Flag to show debug information
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setShowDebugInfo($flag)
    {
    }

    /**
     * Specifies the number of rows to skip
     *
     * @param int $start
     *
     * @return SolrQuery Returns the current SolrQuery object.
     */
    public function setStart($start)
    {
    }

    /**
     * Enables or disables the Stats component
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setStats($flag)
    {
    }

    /**
     * Enables or disables the TermsComponent
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTerms($flag)
    {
    }

    /**
     * Sets the name of the field to get the Terms from
     *
     * @param string $fieldname
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsField($fieldname)
    {
    }

    /**
     * Include the lower bound term in the result set
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsIncludeLowerBound($flag)
    {
    }

    /**
     * Include the upper bound term in the result set
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsIncludeUpperBound($flag)
    {
    }

    /**
     * Sets the maximum number of terms to return
     *
     * @param int $limit
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsLimit($limit)
    {
    }

    /**
     * Specifies the Term to start from
     *
     * @param string $lowerBound
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsLowerBound($lowerBound)
    {
    }

    /**
     * Sets the maximum document frequency
     *
     * @param int $frequency
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsMaxCount($frequency)
    {
    }

    /**
     * Sets the minimum document frequency
     *
     * @param int $frequency
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsMinCount($frequency)
    {
    }

    /**
     * Restrict matches to terms that start with the prefix
     *
     * @param string $prefix
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsPrefix($prefix)
    {
    }

    /**
     * Return the raw characters of the indexed term
     *
     * @param bool $flag
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsReturnRaw($flag)
    {
    }

    /**
     * Specifies how to sort the returned terms
     *
     * @param int $sortType
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsSort($sortType)
    {
    }

    /**
     * Sets the term to stop at
     *
     * @param string $upperBound
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTermsUpperBound($upperBound)
    {
    }

    /**
     * The time allowed for search to finish
     *
     * @param int $timeAllowed
     *
     * @return SolrQuery Returns the current SolrQuery object, if the return value is used.
     */
    public function setTimeAllowed($timeAllowed)
    {
    }
}