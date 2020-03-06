<?php

use App\OutputGroup;
use Illuminate\Database\Seeder;

class OutputGroupsSeeder extends Seeder
{
    private $configs = [
        'name' => 'HLS',
        'config' => '{
            "Name": "Apple HLS",
            "Outputs": [' . OutputGroup::OUTPUT_REPLACEMENT . '],
            "OutputGroupSettings": {
              "Type": "HLS_GROUP_SETTINGS",
              "HlsGroupSettings": {
                "ManifestDurationFormat": "INTEGER",
                "SegmentLength": 10,
                "TimedMetadataId3Period": 10,
                "CaptionLanguageSetting": "OMIT",
                "Destination": "s3://'. OutputGroup::BUCKET_REPLACEMENT .'/' . OutputGroup::FOLDER_REPLACEMENT . '/",
                "TimedMetadataId3Frame": "PRIV",
                "CodecSpecification": "RFC_4281",
                "OutputSelection": "MANIFESTS_AND_SEGMENTS",
                "ProgramDateTimePeriod": 600,
                "MinSegmentLength": 0,
                "MinFinalSegmentLength": 0,
                "DirectoryStructure": "SINGLE_DIRECTORY",
                "ProgramDateTime": "EXCLUDE",
                "SegmentControl": "SEGMENTED_FILES",
                "ManifestCompression": "NONE",
                "ClientCache": "ENABLED",
                "StreamInfResolution": "INCLUDE"
              }
            }
      }'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OutputGroup::create($this->configs);
    }
}
