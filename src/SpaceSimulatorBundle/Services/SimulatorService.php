<?php

namespace SpaceSimulatorBundle\Services;


use SpaceSimulatorBundle\Entity\logHistory;
use SpaceSimulatorBundle\Entity\logHistoryRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Container;

class SimulatorService
{
    const LOG_CARDINAL_POINT = 'East';
    const SIMULATOR_NAME = 'nuptic-43';

    /**
     * @var LogHistoryRepositoryInterface
     */
    private $log_history_repository;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Container
     */
    private $container;

    /**
     * SimulatorService constructor.
     * @param logHistoryRepository $log_history_repository
     * @param LoggerInterface $logger
     * @param Container $container
     */
    public function __construct(
        logHistoryRepository $log_history_repository,
        LoggerInterface $logger,
        Container $container
    ) {
        $this->log_history_repository = $log_history_repository;
        $this->logger = $logger;
        $this->container = $container;
    }

    public function addSimulationRequest($params) {
        try {
            $numRequest = $this->setCountCalls($this->getCountCalls() + 1);
            $this->saveSimulationToHistory($params);
            $this->saveLog($params);
        } catch (\Exception $e) {
            $res = array(
                'res' => 'ko',
                'msg' => $e->getMessage()
            );
        }

        return $res;
    }

    private function saveSimulationToHistory($params) {
        $logHistory = new logHistory();

        $logHistory->setIdSimulation($params['idSimulation']);
        $logHistory->setCardinalPoint($params['cardinalPoint']);
        $logHistory->setNum($params['num']);
        $logHistory->setIdTravel($params['idTravel']);

        $this->log_history_repository->save($logHistory);
    }

    private function saveLog($params) {
        try {
            if ($params['cardinalPoint'] == self::LOG_CARDINAL_POINT) {
                $this->logger->info(
                    'Name Simulator: ' . self::SIMULATOR_NAME .
                    'Cardinal Point: ' . $params['cardinalPoint'] .
                    'Number of Call: ' . $params['num'] .
                    'Path: ' . $params['idTravel']
                );
            }
        } catch (\Exception $e) {
            $this->logger->error('Logger error: ') . $e->getMessage();
        }
    }

    private function getCountCalls() {
        try {
            $redis = $this->container->get("snc_redis.default");

            $key = "count:calls";
            $res = $redis->get($key);
        } catch (\Exception $e) {
            $this->logger->error('Redis error: ' . $e->getMessage());
            $res = 0;
        }

        return intval($res);
    }

    private function setCountCalls($num) {
        try {
            $redis = $this->container->get('snc_redis.default');

            $key = "count:calls";
            $redis->set($key, $num);
        } catch (\Exception $e) {
            $this->logger->error('Redis error: ' . $e->getMessage());
        }

        return intval($num);
    }
}
