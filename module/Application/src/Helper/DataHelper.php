<?php

declare(strict_types=1);

namespace Application\Helper;

use Application\Entity\Movie;

class DataHelper
{
    /**
     * @param Movie[] $allSearchHistory
     * @return array
     */
    public function createMovieData(array $allSearchHistory): array
    {
        $movies = [];

        foreach ($allSearchHistory as $movie) {

            $ls = [];
            foreach ($movie->getLanguages() as $l){
                $ls[] = $l->getLanguage();
            }

            $gs = [];
            foreach ($movie->getGenres() as $g){
                $gs[] = $g->getGenre();
            }

            $movies[] = [
                'name' => $movie->getName(),
                'genre' => count($movie->getGenres()) > 0
                    ? implode(', ', array_unique($gs))
                    : '-',
                'language' => count($movie->getLanguages()) > 0
                    ? implode(', ', array_unique($ls))
                    : '-',
            ];
        }

        return $movies;
    }

    /**
     * @param string[][] $allOptions
     * @return array
     */
    public function createOptionsData(array $allOptions): array
    {
        $options = array();

        foreach ($allOptions as $option) {
            $options[] = array_pop($option);
        }

        return $options;
    }
}
